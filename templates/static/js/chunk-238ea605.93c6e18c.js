(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-238ea605"],{"0dc0":function(t,e,o){},"7c28":function(t,e,o){"use strict";var a=o("0dc0"),i=o.n(a);i.a},b9ea:function(t,e,o){"use strict";o.r(e);var a=function(){var t=this,e=t.$createElement,o=t._self._c||e;return o("div",{staticClass:"bg2"},[o("el-container",[o("el-header",{staticStyle:{height:"130px"}},[o("el-image",{staticStyle:{height:"130px",width:"130px"},attrs:{src:"http://r.photo.store.qq.com/psc?/V12aZVkM2Rfh0C/YWvjNfAyIVey1fwA2tD8GFgFCZvt4zguqnPtEs9uY7sQOqZLv07LPCGAwcCrGmgl3w4Ih3E9ou2ZBkE4UeXK08mSRqGkByGaxeM7ZkovuYQ!/r"}})],1),o("el-container",{staticClass:"mid"},[o("el-main",{directives:[{name:"loading",rawName:"v-loading",value:t.loading,expression:"loading"}],staticClass:"zhihu"},[o("el-form",{ref:"form",attrs:{model:t.form}},[o("el-form-item",{attrs:{"label-width":"0px"}},[o("div",{staticClass:"mainhead"},[o("span",{staticStyle:{"font-weight":"bold","margin-right":"30px","padding-bottom":"10px","border-bottom":"#409EFF","border-width":"2px","border-bottom-style":"solid"}},[t._v("账户注册")])])]),o("el-form-item",{attrs:{"label-width":"0px"}},[o("el-input",{attrs:{placeholder:"手机号或邮箱"},model:{value:t.form.name,callback:function(e){t.$set(t.form,"name",e)},expression:"form.name"}})],1),o("el-form-item",{attrs:{"label-width":"0px"}},[o("el-input",{attrs:{placeholder:"密码","show-password":""},model:{value:t.form.code,callback:function(e){t.$set(t.form,"code",e)},expression:"form.code"}})],1),o("el-form-item",{attrs:{"label-width":"0px"}},[o("el-input",{attrs:{placeholder:"再次确认密码","show-password":""},model:{value:t.form.code2,callback:function(e){t.$set(t.form,"code2",e)},expression:"form.code2"}})],1),o("el-form-item",[o("el-button",{staticStyle:{width:"380px"},attrs:{type:"primary"},on:{click:function(e){return t.onSubmit(t.form.name,t.form.code,t.form.code2)}}},[t._v("注册")])],1),o("el-form-item",[o("el-button",{staticStyle:{width:"380px"},attrs:{type:"info"}},[t._v("游客访问")])],1)],1),o("el-divider"),o("div",{staticStyle:{"font-size":"14px"}},[o("div",[o("span",[t._v("注册即代表同意《礼朴协议》《隐私保护指引》")])]),o("span",[t._v("已有礼朴账户？点击此处进行"),o("el-button",{attrs:{type:"text"},on:{click:t.bump_login}},[t._v("账户登录")])],1)])],1)],1),o("el-footer")],1)],1)},i=[],n={name:"regi",data:function(){return{form:{name:"",delivery:!1,code:"",code2:""},loading:!1}},methods:{onSubmit:function(t,e,o){console.log("submit!");var a={username:t,pwda:e,pwdb:o};this.$http.post("/test.php",a).then((function(t){var e="请重新注册！",o=t.data;"成功"==o?alert("注册成功！"):alert(o+e)}),(function(t){console.log(t)})).catch((function(t){console.log(t)}))},bump_login:function(){this.$router.push({path:"/login"})}}},r=n,l=(o("7c28"),o("2877")),s=Object(l["a"])(r,a,i,!1,null,"f5ad8c08",null);e["default"]=s.exports}}]);
//# sourceMappingURL=chunk-238ea605.93c6e18c.js.map