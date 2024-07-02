import{a as x,u as A,e as k}from"./links.cMjoa9mX.js";import{A as y,T as D}from"./TitleDescription.CwO_PcMK.js";import{C as P}from"./Card.B69_swGC.js";import{C as B}from"./Tabs.D42knyjl.js";import{C as O}from"./Tooltip.DiN2Zjvc.js";import{P as L}from"./PostTypes.Cef6XkQ_.js";import{a as j}from"./index.BB7B6rSp.js";import{x as a,c as l,F as h,K as g,o as s,l as f,m as n,a as o,H as w,D as c,t as e,C as p,v as E,T as F}from"./vue.esm-bundler.CWQFYt9y.js";import{_ as M}from"./_plugin-vue_export-helper.BN1snXvA.js";import"./default-i18n.Bd0Z306Z.js";import"./helpers.D2xRWOvn.js";import"./JsonValues.D25FTfEu.js";import"./MaxCounts.DHV7qSQX.js";import"./RadioToggle.BLVmJ7Zx.js";import"./Caret.iRBf3wcH.js";import"./ProBadge.WwPkDor4.js";import"./RobotsMeta.DaT5Emc8.js";import"./Checkbox.D2dfpbIi.js";import"./Checkmark.pCOnqh_g.js";import"./Row.CzuhYwfs.js";import"./SettingsRow.DQldd-1Z.js";import"./Editor.DPdoRvzJ.js";import"./Tags.DsiuS2Z3.js";import"./postSlug.XW1wPUFy.js";import"./metabox.B54N9lJ3.js";import"./cleanForSlug.o2RefBn0.js";import"./toString.XwB3Xa5p.js";import"./_baseTrim.BYZhh0MR.js";import"./_stringToArray.DnK4tKcY.js";import"./get.BT85ybc8.js";import"./_baseSet.DALGekmy.js";import"./GoogleSearchPreview.DfWUGO2R.js";import"./constants.B6ynd7gz.js";import"./HtmlTagsEditor.nHVKntJb.js";import"./UnfilteredHtml.C4hlZYFQ.js";import"./Slide.CRIn0kdn.js";import"./TruSeoScore.TjofuHRQ.js";import"./Ellipse.ajMtnCZF.js";import"./Information.CESrgQJV.js";const N={setup(){return{optionsStore:x(),rootStore:A(),settingsStore:k()}},components:{Advanced:y,CoreCard:P,CoreMainTabs:B,CoreTooltip:O,SvgCircleQuestionMark:j,TitleDescription:D},mixins:[L],data(){return{internalDebounce:null,strings:{label:this.$t.__("Label:",this.$td),name:this.$t.__("Slug:",this.$td),postTypes:this.$t.__("Post Types:",this.$td),ctaButtonText:this.$t.__("Unlock Custom Taxonomies",this.$td),ctaDescription:this.$t.sprintf(this.$t.__("%1$s %2$s lets you set the SEO title and description for custom taxonomies. You can also control all of the robots meta and other options just like the default category and tags taxonomies.",this.$td),"AIOSEO","Pro"),ctaHeader:this.$t.sprintf(this.$t.__("Custom Taxonomy Support is a %1$s Feature",this.$td),"PRO")},tabs:[{slug:"title-description",name:this.$t.__("Title & Description",this.$td),access:"aioseo_search_appearance_settings",pro:!1},{slug:"advanced",name:this.$t.__("Advanced",this.$td),access:"aioseo_search_appearance_settings",pro:!1}]}},computed:{taxonomies(){return this.rootStore.aioseo.postData.taxonomies}},methods:{processChangeTab(m,_){this.internalDebounce||(this.internalDebounce=!0,this.settingsStore.changeTab({slug:`${m}SA`,value:_}),setTimeout(()=>{this.internalDebounce=!1},50))}}},R={class:"aioseo-search-appearance-taxonomies"},V={class:"aioseo-description"},q=o("br",null,null,-1),z=o("br",null,null,-1),H=o("br",null,null,-1);function I(m,_,U,r,i,d){const b=a("svg-circle-question-mark"),S=a("core-tooltip"),T=a("core-main-tabs"),C=a("core-card");return s(),l("div",R,[(s(!0),l(h,null,g(d.taxonomies,(t,$)=>(s(),f(C,{key:$,slug:`${t.name}SA`},{header:n(()=>[o("div",{class:w(["icon dashicons",m.getPostIconClass(t.icon)])},null,2),c(" "+e(t.label)+" ",1),p(S,{"z-index":"99999"},{tooltip:n(()=>[o("div",V,[c(e(i.strings.label)+" ",1),o("strong",null,e(t.label),1),q,c(" "+e(i.strings.name)+" ",1),o("strong",null,e(t.name),1),z,c(" "+e(i.strings.postTypes),1),H,o("ul",null,[(s(!0),l(h,null,g(t.postTypes,(u,v)=>(s(),l("li",{key:v},[o("strong",null,e(u),1)]))),128))])])]),default:n(()=>[p(b)]),_:2},1024)]),tabs:n(()=>[p(T,{tabs:i.tabs,showSaveButton:!1,active:r.settingsStore.settings.internalTabs[`${t.name}SA`],internal:"",onChanged:u=>d.processChangeTab(t.name,u)},null,8,["tabs","active","onChanged"])]),default:n(()=>[p(F,{name:"route-fade",mode:"out-in"},{default:n(()=>[(s(),f(E(r.settingsStore.settings.internalTabs[`${t.name}SA`]),{object:t,separator:r.optionsStore.options.searchAppearance.global.separator,options:r.optionsStore.dynamicOptions.searchAppearance.taxonomies[t.name],type:"taxonomies","show-bulk":!1},null,8,["object","separator","options"]))]),_:2},1024)]),_:2},1032,["slug"]))),128))])}const Ot=M(N,[["render",I]]);export{Ot as default};
