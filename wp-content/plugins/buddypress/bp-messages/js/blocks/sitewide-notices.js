parcelRequire=function(e,r,t,n){var i,o="function"==typeof parcelRequire&&parcelRequire,u="function"==typeof require&&require;function f(t,n){if(!r[t]){if(!e[t]){var i="function"==typeof parcelRequire&&parcelRequire;if(!n&&i)return i(t,!0);if(o)return o(t,!0);if(u&&"string"==typeof t)return u(t);var c=new Error("Cannot find module '"+t+"'");throw c.code="MODULE_NOT_FOUND",c}p.resolve=function(r){return e[t][1][r]||r},p.cache={};var l=r[t]=new f.Module(t);e[t][0].call(l.exports,p,l,l.exports,this)}return r[t].exports;function p(e){return f(p.resolve(e))}}f.isParcelRequire=!0,f.Module=function(e){this.id=e,this.bundle=f,this.exports={}},f.modules=e,f.cache=r,f.parent=o,f.register=function(r,t){e[r]=[function(e,r){r.exports=t},{}]};for(var c=0;c<t.length;c++)try{f(t[c])}catch(e){i||(i=e)}if(t.length){var l=f(t[t.length-1]);"object"==typeof exports&&"undefined"!=typeof module?module.exports=l:"function"==typeof define&&define.amd?define(function(){return l}):n&&(this[n]=l)}if(parcelRequire=f,i)throw i;return f}({"HPdN":[function(require,module,exports) {
"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.default=void 0;const{blockEditor:{InspectorControls:e},components:{Disabled:t,PanelBody:l,TextControl:n},element:{Fragment:s,createElement:r},i18n:{__:i},serverSideRender:o}=wp,d=({attributes:d,setAttributes:u})=>{const{title:a}=d;return r(s,null,r(e,null,r(l,{title:i("Settings","buddypress"),initialOpen:!0},r(n,{label:i("Title","buddypress"),value:a,onChange:e=>{u({title:e})}}))),r(t,null,r(o,{block:"bp/sitewide-notices",attributes:d})))};var u=d;exports.default=u;
},{}],"lnNZ":[function(require,module,exports) {
"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.default=void 0;const{blocks:{createBlock:e}}=wp,t={from:[{type:"block",blocks:["core/legacy-widget"],isMatch:({idBase:e,instance:t})=>!(null==t||!t.raw)&&"bp_messages_sitewide_notices_widget"===e,transform:({instance:t})=>e("bp/sitewide-notices",{title:t.raw.title})}]};var s=t;exports.default=s;
},{}],"kd3Z":[function(require,module,exports) {
"use strict";var e=i(require("./sitewide-notices/edit")),t=i(require("./sitewide-notices/transforms"));function i(e){return e&&e.__esModule?e:{default:e}}const{blocks:{registerBlockType:s},i18n:{__:r}}=wp;s("bp/sitewide-notices",{title:r("Sitewide Notices","buddypress"),description:r("Display Sitewide Notices posted by the site administrator","buddypress"),icon:{background:"#fff",foreground:"#d84800",src:"megaphone"},category:"buddypress",attributes:{title:{type:"string",default:""}},edit:e.default,transforms:t.default});
},{"./sitewide-notices/edit":"HPdN","./sitewide-notices/transforms":"lnNZ"}]},{},["kd3Z"], null)
//# sourceMappingURL=/bp-messages/js/blocks/sitewide-notices.js.map