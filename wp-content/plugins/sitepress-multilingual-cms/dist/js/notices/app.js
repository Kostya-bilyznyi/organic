!function(n){var t={};function e(o){if(t[o])return t[o].exports;var r=t[o]={i:o,l:!1,exports:{}};return n[o].call(r.exports,r,r.exports,e),r.l=!0,r.exports}e.m=n,e.c=t,e.d=function(n,t,o){e.o(n,t)||Object.defineProperty(n,t,{configurable:!1,enumerable:!0,get:o})},e.r=function(n){Object.defineProperty(n,"__esModule",{value:!0})},e.n=function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return e.d(t,"a",t),t},e.o=function(n,t){return Object.prototype.hasOwnProperty.call(n,t)},e.p="",e(e.s=1)}([function(n,t,e){"use strict";e.r(t);var o=function(n,t){var e=t.target,o=e.checked,r=e.dataset.id;return e.disabled=!0,function(n,t){var e=new FormData;return e.append("action","wpml_dismiss_notice"),e.append("id",n),e.append("dismiss",t),fetch(ajaxurl,{method:"POST",body:e}).then(function(n){if(!n.ok)throw new Error("Notice dismiss action has failed!.");return n.json()})}(r,o).catch(function(t){n.log(t)}).finally(function(){e.disabled=!1})};document.addEventListener("DOMContentLoaded",function(){!function(n,t){n.addEventListener("change",function(n){n.target.matches(".wpml_dismiss_notice")&&o(t,n)})}(document,console)})},function(n,t,e){n.exports=e(0)}]);