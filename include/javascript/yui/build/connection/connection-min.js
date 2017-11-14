/*
Copyright (c) 2011, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.com/yui/license.html
version: 2.9.0
*/
YAHOO.util.Connect={_msxml_progid:["Microsoft.XMLHTTP","MSXML2.XMLHTTP.3.0","MSXML2.XMLHTTP"],_http_headers:{},_has_http_headers:false,_use_default_post_header:true,_default_post_header:"application/x-www-form-urlencoded; charset=UTF-8",_default_form_header:"application/x-www-form-urlencoded",_use_default_xhr_header:true,_default_xhr_header:"XMLHttpRequest",_has_default_headers:true,_isFormSubmit:false,_default_headers:{},_poll:{},_timeOut:{},_polling_interval:50,_transaction_id:0,startEvent:new YAHOO.util.CustomEvent("start"),completeEvent:new YAHOO.util.CustomEvent("complete"),successEvent:new YAHOO.util.CustomEvent("success"),failureEvent:new YAHOO.util.CustomEvent("failure"),abortEvent:new YAHOO.util.CustomEvent("abort"),_customEvents:{onStart:["startEvent","start"],onComplete:["completeEvent","complete"],onSuccess:["successEvent","success"],onFailure:["failureEvent","failure"],onUpload:["uploadEvent","upload"],onAbort:["abortEvent","abort"]},setProgId:function(a){this._msxml_progid.unshift(a);},setDefaultPostHeader:function(a){if(typeof a=="string"){this._default_post_header=a;this._use_default_post_header=true;}else{if(typeof a=="boolean"){this._use_default_post_header=a;}}},setDefaultXhrHeader:function(a){if(typeof a=="string"){this._default_xhr_header=a;}else{this._use_default_xhr_header=a;}},setPollingInterval:function(a){if(typeof a=="number"&&isFinite(a)){this._polling_interval=a;}},createXhrObject:function(g){var d,a,b;try{a=new XMLHttpRequest();d={conn:a,tId:g,xhr:true};}catch(c){for(b=0;b<this._msxml_progid.length;++b){try{a=new ActiveXObject(this._msxml_progid[b]);d={conn:a,tId:g,xhr:true};break;}catch(f){}}}finally{return d;}},getConnectionObject:function(a){var c,d=this._transaction_id;try{if(!a){c=this.createXhrObject(d);}else{c={tId:d};if(a==="xdr"){c.conn=this._transport;c.xdr=true;}else{if(a==="upload"){c.upload=true;}}}if(c){this._transaction_id++;}}catch(b){}return c;},asyncRequest:function(h,d,g,a){var b=g&&g.argument?g.argument:null,e=this,f,c;if(this._isFileUpload){c="upload";}else{if(g&&g.xdr){c="xdr";}}f=this.getConnectionObject(c);if(!f){return null;}else{if(g&&g.customevents){this.initCustomEvents(f,g);}if(this._isFormSubmit){if(this._isFileUpload){window.setTimeout(function(){e.uploadFile(f,g,d,a);},10);return f;}if(h.toUpperCase()=="GET"){if(this._sFormData.length!==0){d+=((d.indexOf("?")==-1)?"?":"&")+this._sFormData;}}else{if(h.toUpperCase()=="POST"){a=a?this._sFormData+"&"+a:this._sFormData;}}}if(h.toUpperCase()=="GET"&&(g&&g.cache===false)){d+=((d.indexOf("?")==-1)?"?":"&")+"rnd="+new Date().valueOf().toString();}if(this._use_default_xhr_header){if(!this._default_headers["X-Requested-With"]){this.initHeader("X-Requested-With",this._default_xhr_header,true);}}if((h.toUpperCase()==="POST"&&this._use_default_post_header)&&this._isFormSubmit===false){this.initHeader("Content-Type",this._default_post_header);}if(f.xdr){this.xdr(f,h,d,g,a);return f;}f.conn.open(h,d,true);if(this._has_default_headers||this._has_http_headers){this.setHeader(f);}this.handleReadyState(f,g);f.conn.send(a||"");if(this._isFormSubmit===true){this.resetFormState();}this.startEvent.fire(f,b);if(f.startEvent){f.startEvent.fire(f,b);}return f;}},initCustomEvents:function(a,c){var b;for(b in c.customevents){if(this._customEvents[b][0]){a[this._customEvents[b][0]]=new YAHOO.util.CustomEvent(this._customEvents[b][1],(c.scope)?c.scope:null);a[this._customEvents[b][0]].subscribe(c.customevents[b]);}}},handleReadyState:function(c,d){var b=this,a=(d&&d.argument)?d.argument:null;if(d&&d.timeout){this._timeOut[c.tId]=window.setTimeout(function(){b.abort(c,d,true);},d.timeout);}this._poll[c.tId]=window.setInterval(function(){if(c.conn&&c.conn.readyState===4){window.clearInterval(b._poll[c.tId]);delete b._poll[c.tId];if(d&&d.timeout){window.clearTimeout(b._timeOut[c.tId]);delete b._timeOut[c.tId];}b.completeEvent.fire(c,a);if(c.completeEvent){c.completeEvent.fire(c,a);}b.handleTransactionResponse(c,d);}},this._polling_interval);},handleTransactionResponse:function(b,j,d){var f,a,h=(j&&j.argument)?j.argument:null,c=(b.r&&b.r.statusText==="xdr:success")?true:false,i=(b.r&&b.r.statusText==="xdr:failure")?true:false,k=d;try{if((b.conn.status!==undefined&&b.conn.status!==0)||c){f=b.conn.status;}else{if(i&&!k){f=0;}else{f=13030;}}}catch(g){f=13030;}if((f>=200&&f<300)||f===1223||c){a=b.xdr?b.r:this.createResponseObject(b,h);if(j&&j.success){if(!j.scope){j.success(a);}else{j.success.apply(j.scope,[a]);}}this.successEvent.fire(a);if(b.successEvent){b.successEvent.fire(a);}}else{switch(f){case 12002:case 12029:case 12030:case 12031:case 12152:case 13030:a=this.createExceptionObject(b.tId,h,(d?d:false));if(j&&j.failure){if(!j.scope){j.failure(a);}else{j.failure.apply(j.scope,[a]);}}break;default:a=(b.xdr)?b.response:this.createResponseObject(b,h);if(j&&j.failure){if(!j.scope){j.failure(a);}else{j.failure.apply(j.scope,[a]);}}}this.failureEvent.fire(a);if(b.failureEvent){b.failureEvent.fire(a);}}this.releaseObject(b);a=null;},createResponseObject:function(a,h){var d={},k={},f,c,g,b;try{c=a.conn.getAllResponseHeaders();g=c.split("\n");for(f=0;f<g.length;f++){b=g[f].indexOf(":");if(b!=-1){k[g[f].substring(0,b)]=YAHOO.lang.trim(g[f].substring(b+2));}}}catch(j){}d.tId=a.tId;d.status=(a.conn.status==1223)?204:a.conn.status;d.statusText=(a.conn.status==1223)?"No Content":a.conn.statusText;d.getResponseHeader=k;d.getAllResponseHeaders=c;d.responseText=a.conn.responseText;d.responseXML=a.conn.responseXML;if(h){d.argument=h;}return d;},createExceptionObject:function(h,d,a){var f=0,g="communication failure",c=-1,b="transaction aborted",e={};e.tId=h;if(a){e.status=c;e.statusText=b;}else{e.status=f;e.statusText=g;}if(d){e.argument=d;}return e;},initHeader:function(a,d,c){var b=(c)?this._default_headers:this._http_headers;b[a]=d;if(c){this._has_default_headers=true;}else{this._has_http_headers=true;}},setHeader:function(a){var b;if(this._has_default_headers){for(b in this._default_headers){if(YAHOO.lang.hasOwnProperty(this._default_headers,b)){a.conn.setRequestHeader(b,this._default_headers[b]);
}}}if(this._has_http_headers){for(b in this._http_headers){if(YAHOO.lang.hasOwnProperty(this._http_headers,b)){a.conn.setRequestHeader(b,this._http_headers[b]);}}this._http_headers={};this._has_http_headers=false;}},resetDefaultHeaders:function(){this._default_headers={};this._has_default_headers=false;},abort:function(e,g,a){var d,b=(g&&g.argument)?g.argument:null;e=e||{};if(e.conn){if(e.xhr){if(this.isCallInProgress(e)){e.conn.abort();window.clearInterval(this._poll[e.tId]);delete this._poll[e.tId];if(a){window.clearTimeout(this._timeOut[e.tId]);delete this._timeOut[e.tId];}d=true;}}else{if(e.xdr){e.conn.abort(e.tId);d=true;}}}else{if(e.upload){var c="yuiIO"+e.tId;var f=document.getElementById(c);if(f){YAHOO.util.Event.removeListener(f,"load");document.body.removeChild(f);if(a){window.clearTimeout(this._timeOut[e.tId]);delete this._timeOut[e.tId];}d=true;}}else{d=false;}}if(d===true){this.abortEvent.fire(e,b);if(e.abortEvent){e.abortEvent.fire(e,b);}this.handleTransactionResponse(e,g,true);}return d;},isCallInProgress:function(a){a=a||{};if(a.xhr&&a.conn){return a.conn.readyState!==4&&a.conn.readyState!==0;}else{if(a.xdr&&a.conn){return a.conn.isCallInProgress(a.tId);}else{if(a.upload===true){return document.getElementById("yuiIO"+a.tId)?true:false;}else{return false;}}}},releaseObject:function(a){if(a&&a.conn){a.conn=null;a=null;}}};(function(){var g=YAHOO.util.Connect,h={};function d(i){var j='<object id="YUIConnectionSwf" type="application/x-shockwave-flash" data="'+i+'" width="0" height="0">'+'<param name="movie" value="'+i+'">'+'<param name="allowScriptAccess" value="always">'+"</object>",k=document.createElement("div");document.body.appendChild(k);k.innerHTML=j;}function b(l,i,j,n,k){h[parseInt(l.tId)]={"o":l,"c":n};if(k){n.method=i;n.data=k;}l.conn.send(j,n,l.tId);}function e(i){d(i);g._transport=document.getElementById("YUIConnectionSwf");}function c(){g.xdrReadyEvent.fire();}function a(j,i){if(j){g.startEvent.fire(j,i.argument);if(j.startEvent){j.startEvent.fire(j,i.argument);}}}function f(j){var k=h[j.tId].o,i=h[j.tId].c;if(j.statusText==="xdr:start"){a(k,i);return;}j.responseText=decodeURI(j.responseText);k.r=j;if(i.argument){k.r.argument=i.argument;}this.handleTransactionResponse(k,i,j.statusText==="xdr:abort"?true:false);delete h[j.tId];}g.xdr=b;g.swf=d;g.transport=e;g.xdrReadyEvent=new YAHOO.util.CustomEvent("xdrReady");g.xdrReady=c;g.handleXdrResponse=f;})();(function(){var e=YAHOO.util.Connect,g=YAHOO.util.Event,a=document.documentMode?document.documentMode:false;e._isFileUpload=false;e._formNode=null;e._sFormData=null;e._submitElementValue=null;e.uploadEvent=new YAHOO.util.CustomEvent("upload");e._hasSubmitListener=function(){if(g){g.addListener(document,"click",function(k){var j=g.getTarget(k),i=j.nodeName.toLowerCase();if((i==="input"||i==="button")&&(j.type&&j.type.toLowerCase()=="submit")){e._submitElementValue=encodeURIComponent(j.name)+"="+encodeURIComponent(j.value);}});return true;}return false;}();function h(w,r,m){var v,l,u,s,z,t=false,p=[],y=0,o,q,n,x,k;this.resetFormState();if(typeof w=="string"){v=(document.getElementById(w)||document.forms[w]);}else{if(typeof w=="object"){v=w;}else{return;}}if(r){this.createFrame(m?m:null);this._isFormSubmit=true;this._isFileUpload=true;this._formNode=v;return;}for(o=0,q=v.elements.length;o<q;++o){l=v.elements[o];z=l.disabled;u=l.name;if(!z&&u){u=encodeURIComponent(u)+"=";s=encodeURIComponent(l.value);switch(l.type){case"select-one":if(l.selectedIndex>-1){k=l.options[l.selectedIndex];p[y++]=u+encodeURIComponent((k.attributes.value&&k.attributes.value.specified)?k.value:k.text);}break;case"select-multiple":if(l.selectedIndex>-1){for(n=l.selectedIndex,x=l.options.length;n<x;++n){k=l.options[n];if(k.selected){p[y++]=u+encodeURIComponent((k.attributes.value&&k.attributes.value.specified)?k.value:k.text);}}}break;case"radio":case"checkbox":if(l.checked){p[y++]=u+s;}break;case"file":case undefined:case"reset":case"button":break;case"submit":if(t===false){if(this._hasSubmitListener&&this._submitElementValue){p[y++]=this._submitElementValue;}t=true;}break;default:p[y++]=u+s;}}}this._isFormSubmit=true;this._sFormData=p.join("&");this.initHeader("Content-Type",this._default_form_header);return this._sFormData;}function d(){this._isFormSubmit=false;this._isFileUpload=false;this._formNode=null;this._sFormData="";}function c(i){var j="yuiIO"+this._transaction_id,l=(a>=9)?true:false,k;if(YAHOO.env.ua.ie&&!l){k=document.createElement('<iframe id="'+j+'" name="'+j+'" />');if(typeof i=="boolean"){k.src="javascript:false";}}else{k=document.createElement("iframe");k.id=j;k.name=j;}k.style.position="absolute";k.style.top="-1000px";k.style.left="-1000px";document.body.appendChild(k);}function f(j){var m=[],k=j.split("&"),l,n;for(l=0;l<k.length;l++){n=k[l].indexOf("=");if(n!=-1){m[l]=document.createElement("input");m[l].type="hidden";m[l].name=decodeURIComponent(k[l].substring(0,n));m[l].value=decodeURIComponent(k[l].substring(n+1));this._formNode.appendChild(m[l]);}}return m;}function b(m,y,n,l){var t="yuiIO"+m.tId,u="multipart/form-data",w=document.getElementById(t),p=(a>=8)?true:false,z=this,v=(y&&y.argument)?y.argument:null,x,s,k,r,j,q;j={action:this._formNode.getAttribute("action"),method:this._formNode.getAttribute("method"),target:this._formNode.getAttribute("target")};this._formNode.setAttribute("action",n);this._formNode.setAttribute("method","POST");this._formNode.setAttribute("target",t);if(YAHOO.env.ua.ie&&!p){this._formNode.setAttribute("encoding",u);}else{this._formNode.setAttribute("enctype",u);}if(l){x=this.appendPostData(l);}this._formNode.submit();this.startEvent.fire(m,v);if(m.startEvent){m.startEvent.fire(m,v);}if(y&&y.timeout){this._timeOut[m.tId]=window.setTimeout(function(){z.abort(m,y,true);},y.timeout);}if(x&&x.length>0){for(s=0;s<x.length;s++){this._formNode.removeChild(x[s]);}}for(k in j){if(YAHOO.lang.hasOwnProperty(j,k)){if(j[k]){this._formNode.setAttribute(k,j[k]);}else{this._formNode.removeAttribute(k);}}}this.resetFormState();
q=function(){var i,A,B;if(y&&y.timeout){window.clearTimeout(z._timeOut[m.tId]);delete z._timeOut[m.tId];}z.completeEvent.fire(m,v);if(m.completeEvent){m.completeEvent.fire(m,v);}r={tId:m.tId,argument:v};try{i=w.contentWindow.document.getElementsByTagName("body")[0];A=w.contentWindow.document.getElementsByTagName("pre")[0];if(i){if(A){B=A.textContent?A.textContent:A.innerText;}else{B=i.textContent?i.textContent:i.innerText;}}r.responseText=B;r.responseXML=w.contentWindow.document.XMLDocument?w.contentWindow.document.XMLDocument:w.contentWindow.document;}catch(o){}if(y&&y.upload){if(!y.scope){y.upload(r);}else{y.upload.apply(y.scope,[r]);}}z.uploadEvent.fire(r);if(m.uploadEvent){m.uploadEvent.fire(r);}g.removeListener(w,"load",q);setTimeout(function(){document.body.removeChild(w);z.releaseObject(m);},100);};g.addListener(w,"load",q);}e.setForm=h;e.resetFormState=d;e.createFrame=c;e.appendPostData=f;e.uploadFile=b;})();YAHOO.register("connection",YAHOO.util.Connect,{version:"2.9.0",build:"2800"});