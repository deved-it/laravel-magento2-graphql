(window.webpackJsonp=window.webpackJsonp||[]).push([[3],{313:function(t,a,e){},314:function(t,a,e){},331:function(t,a,e){},332:function(t,a,e){},342:function(t,a,e){"use strict";e(313)},343:function(t,a,e){"use strict";e(314)},362:function(t,a,e){"use strict";e(331)},363:function(t,a,e){"use strict";e(332)},367:function(t,a,e){"use strict";var s={name:"Home",components:{NavLink:e(311).a},computed:{data:function(){return this.$page.frontmatter},actionLink:function(){return{link:this.data.actionLink,text:this.data.actionText}}}},n=(e(342),e(343),e(45)),i=Object(n.a)(s,(function(){var t=this,a=t.$createElement,e=t._self._c||a;return e("main",{staticClass:"home",attrs:{"aria-labelledby":null!==t.data.heroText?"main-title":null}},[e("header",{staticClass:"hero"},[t.data.heroImage?e("img",{attrs:{src:t.$withBase(t.data.heroImage),alt:t.data.heroAlt||"hero"}}):t._e(),t._v(" "),null!==t.data.heroText?e("h1",{attrs:{id:"main-title"}},[t._v("\n      "+t._s(t.data.heroText||t.$title||"Hello")+"\n    ")]):t._e(),t._v(" "),null!==t.data.tagline?e("p",{staticClass:"description"},[t._v("\n      "+t._s(t.data.tagline||t.$description||"Welcome to your VuePress site")+"\n    ")]):t._e(),t._v(" "),t.data.actionText&&t.data.actionLink?e("p",{staticClass:"action"},[e("NavLink",{staticClass:"action-button",attrs:{item:t.actionLink}})],1):t._e()]),t._v(" "),t._m(0),t._v(" "),e("Content",{staticClass:"theme-default-content custom"}),t._v(" "),t.data.footer?e("div",{staticClass:"footer"},[t._v("\n    "+t._s(t.data.footer)+"\n  ")]):t._e()],1)}),[function(){var t=this.$createElement,a=this._self._c||t;return a("div",{staticClass:"sponsor hero"},[a("p",[this._v("Sponsored by:")]),this._v(" "),a("a",{attrs:{href:"https://www.walmec.com/",target:"_blank"}},[a("img",{attrs:{src:"walmec_sponsor.jpg",alt:"Walmec S.p.A."}})])])}],!1,null,null,null);a.a=i.exports},368:function(t,a,e){"use strict";var s=e(336),n=e(337),i={name:"Sidebar",components:{SidebarLinks:s.default,NavLinks:n.a},props:["items"]},o=(e(362),e(363),e(45)),r=Object(o.a)(i,(function(){var t=this,a=t.$createElement,e=t._self._c||a;return e("aside",{staticClass:"sidebar"},[e("NavLinks"),t._v(" "),t._t("top"),t._v(" "),e("div",{staticClass:"sponsor"},[e("p",[t._v("Sponsored by:")]),t._v(" "),e("a",{attrs:{href:"https://www.walmec.com/",target:"_blank"}},[e("img",{attrs:{src:t.$withBase("/walmec_sponsor.jpg"),alt:"Walmec S.p.A."}})])]),t._v(" "),e("SidebarLinks",{attrs:{depth:0,items:t.items}}),t._v(" "),t._t("bottom")],2)}),[],!1,null,null,null);a.a=r.exports}}]);