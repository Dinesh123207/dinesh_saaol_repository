import{g as w,f as x}from"./links.cMjoa9mX.js";import{C as R}from"./Caret.iRBf3wcH.js";import{C as T}from"./Blur.DNVDismY.js";import{G as B,a as P}from"./Row.CzuhYwfs.js";import{P as U}from"./PostsTable.DFLK6ISD.js";import{x as e,o as a,l as _,m as o,a as u,C as n,D as m,t as l,c as b,d as y}from"./vue.esm-bundler.CWQFYt9y.js";import{_ as d}from"./_plugin-vue_export-helper.BN1snXvA.js";import{C as L}from"./Index.DUPzmxCE.js";import{R as q}from"./RequiredPlans.DAdiEWvO.js";import{L as A}from"./LicenseConditions.zSdNVWwj.js";import"./default-i18n.Bd0Z306Z.js";import"./helpers.D2xRWOvn.js";import"./license.ctOGGUd5.js";import"./upperFirst.CP4N4hLd.js";import"./_stringToArray.DnK4tKcY.js";import"./toString.XwB3Xa5p.js";import"./numbers.zAmItkHM.js";import"./WpTable._80JLonk.js";import"./ScoreButton.CYslBSvp.js";import"./Table.Dk4a_ubM.js";import"./Tooltip.DiN2Zjvc.js";import"./Slide.CRIn0kdn.js";import"./IndexStatus.BXxQ8ydO.js";import"./PostTypes.Cef6XkQ_.js";import"./constants.B6ynd7gz.js";import"./addons.CjB9Xv4t.js";import"./_arrayEach.Fgt6pfHj.js";import"./_getTag.CQI1SwGE.js";const D={setup(){return{searchStatisticsStore:w()}},components:{CoreAlert:R,CoreBlur:T,GridColumn:B,GridRow:P,PostsTable:U},data(){return{strings:{title:this.$t.__("Content Rankings",this.$td),alert:this.$t.__("The Content Rankings report provides valuable insights into the performance of your content in search results and helps you optimize your posts for better results. This report is generated on a monthly basis, covering the past 12 months leading up to the current month. By regularly reviewing this report, you can identify trends in your post rankings and make informed decisions to improve your content's visibility and ultimately increase rankings in search results.",this.$td)},defaultPages:{rows:[],totals:{page:0,pages:0,total:0}}}}},G={class:"aioseo-search-statistics-content-rankings"},N={class:"aioseo-search-statistics-content-rankings__title"};function V(s,h,g,c,t,f){const r=e("core-alert"),i=e("posts-table"),p=e("grid-column"),C=e("grid-row"),v=e("core-blur");return a(),_(v,null,{default:o(()=>[u("div",G,[n(C,null,{default:o(()=>[n(p,null,{default:o(()=>{var k,$;return[n(r,{class:"description",type:"blue","show-close":""},{default:o(()=>[m(l(t.strings.alert),1)]),_:1}),u("div",N,[u("h2",null,l(t.strings.title),1)]),n(i,{posts:(($=(k=c.searchStatisticsStore.data)==null?void 0:k.contentRankings)==null?void 0:$.paginated)||t.defaultPages,columns:["postTitle","indexStatus","lastUpdated","loss","drop","performance"],"show-items-per-page":"","show-table-footer":""},null,8,["posts"])]}),_:1})]),_:1})])]),_:1})}const F=d(D,[["render",V]]),H={setup(){return{licenseStore:x()}},components:{Blur:F,Cta:L,RequiredPlans:q},data(){return{strings:{ctaButtonText:this.$t.__("Unlock Search Statistics",this.$td),ctaHeader:this.$t.sprintf(this.$t.__("Search Statistics is a %1$s Feature",this.$td),"PRO"),ctaDescription:this.$t.__("Connect your site to Google Search Console to receive insights on how content is being discovered. Identify areas for improvement and drive traffic to your website.",this.$td),thisFeatureRequires:this.$t.__("This feature requires one of the following plans:",this.$td),feature1:this.$t.__("Search traffic insights",this.$td),feature2:this.$t.__("Track page rankings",this.$td),feature3:this.$t.__("Track keyword rankings",this.$td),feature4:this.$t.__("Speed tests for individual pages/posts",this.$td)}}}},z={class:"aioseo-search-statistics-content-rankings"};function E(s,h,g,c,t,f){const r=e("blur"),i=e("required-plans"),p=e("cta");return a(),b("div",z,[n(r),n(p,{"cta-link":s.$links.getPricingUrl("search-statistics","search-statistics-upsell","content-rankings"),"button-text":t.strings.ctaButtonText,"learn-more-link":s.$links.getUpsellUrl("search-statistics","content-rankings",s.$isPro?"pricing":"liteUpgrade"),"feature-list":[t.strings.feature1,t.strings.feature2,t.strings.feature3,t.strings.feature4],"align-top":"","hide-bonus":!c.licenseStore.isUnlicensed},{"header-text":o(()=>[m(l(t.strings.ctaHeader),1)]),description:o(()=>[n(i,{"core-feature":["search-statistics","content-rankings"]}),m(" "+l(t.strings.ctaDescription),1)]),_:1},8,["cta-link","button-text","learn-more-link","feature-list","hide-bonus"])])}const S=d(H,[["render",E]]),I={mixins:[A],components:{ContentRankings:S,Lite:S}},M={class:"aioseo-search-statistics-content-rankings"};function O(s,h,g,c,t,f){const r=e("content-rankings",!0),i=e("lite");return a(),b("div",M,[s.shouldShowMain("search-statistics","content-rankings")?(a(),_(r,{key:0})):y("",!0),s.shouldShowUpgrade("search-statistics","content-rankings")||s.shouldShowLite?(a(),_(i,{key:1})):y("",!0)])}const yt=d(I,[["render",O]]);export{yt as default};