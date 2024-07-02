import{a as V,h as H,o as P}from"./links.cMjoa9mX.js";import"./default-i18n.Bd0Z306Z.js";import{x as a,c as u,C as r,m as d,o as p,a as o,D as c,t as n,H as S,d as m,l as L,G as x}from"./vue.esm-bundler.CWQFYt9y.js";import{_ as B}from"./_plugin-vue_export-helper.BN1snXvA.js";import{u as D,W as M}from"./Wizard.BYH_ML4G.js";import{M as U}from"./MaxCounts.DHV7qSQX.js";import{T as G}from"./Tags.DsiuS2Z3.js";import{B as N}from"./Checkbox.D2dfpbIi.js";import{B as R}from"./RadioToggle.BLVmJ7Zx.js";import{C as O}from"./GoogleSearchPreview.DfWUGO2R.js";import{C as E}from"./HtmlTagsEditor.nHVKntJb.js";import{C as I}from"./PostTypeOptions.BZOTx-PB.js";import{W as Y,a as j,b as q}from"./Header.D0hG-ru5.js";import{W as F}from"./CloseAndExit.DqHWVoGn.js";import{_ as J}from"./Steps.QZlLOkGt.js";import"./helpers.D2xRWOvn.js";import"./addons.CjB9Xv4t.js";import"./upperFirst.CP4N4hLd.js";import"./_stringToArray.DnK4tKcY.js";import"./toString.XwB3Xa5p.js";import"./postSlug.XW1wPUFy.js";import"./Caret.iRBf3wcH.js";import"./metabox.B54N9lJ3.js";import"./cleanForSlug.o2RefBn0.js";import"./_baseTrim.BYZhh0MR.js";import"./get.BT85ybc8.js";import"./_baseSet.DALGekmy.js";import"./Checkmark.pCOnqh_g.js";import"./constants.B6ynd7gz.js";import"./Editor.DPdoRvzJ.js";import"./index.BB7B6rSp.js";import"./UnfilteredHtml.C4hlZYFQ.js";import"./HighlightToggle.BqzgXXo2.js";import"./Tooltip.DiN2Zjvc.js";import"./Row.CzuhYwfs.js";import"./PostTypes.Cef6XkQ_.js";import"./Logo.DoVR4qom.js";import"./Index.DsuOvVx_.js";const K={setup(){const{strings:l}=D();return{optionsStore:V(),setupWizardStore:H(),composableStrings:l}},components:{BaseCheckbox:N,BaseRadioToggle:R,CoreGoogleSearchPreview:O,CoreHtmlTagsEditor:E,CorePostTypeOptions:I,WizardBody:Y,WizardCloseAndExit:F,WizardContainer:j,WizardHeader:q,WizardSteps:J},mixins:[U,G,M],data(){return{separator:void 0,loaded:!1,titleCount:0,descriptionCount:0,showHoverClass:!1,editing:!1,loading:!1,stage:"search-appearance",strings:P(this.composableStrings,{searchAppearance:this.$t.__("Search Appearance",this.$td),description:this.$t.__("The way your site is displayed in search results is very important. Take some time to look over these settings and tweak as needed.",this.$td),serpPreview:this.$t.__("SERP Preview",this.$td),editTitleAndDescription:this.$t.__("Edit Title and Description",this.$td),clickToAddSiteTitle:this.$t.__("Click on the tags below to insert variables into your site title.",this.$td),clickToAddSiteDescription:this.$t.__("Click on the tags below to insert variables into your meta description.",this.$td),siteTitle:this.$t.__("Home Page Title",this.$td),metaDescription:this.$t.__("Meta Description",this.$td),isSiteUnderConstruction:this.$t.__("Is the site under construction or live (ready to be indexed)?",this.$td),underConstruction:this.$t.__("Under Construction",this.$td),liveSite:this.$t.__("Live Site",this.$td),includeAllPostTypes:this.$t.__("Include All Post Types",this.$td),enableSitemap:this.$t.__("Enable Sitemap",this.$td),doYouHaveMultipleAuthors:this.$t.__("Do you have multiple authors?",this.$td),redirectAttachmentPages:this.$t.__("Redirect attachment pages?",this.$td)})}},methods:{addHoverClass(){this.showHoverClass=!0},removeHoverClass(){this.showHoverClass=!1},saveAndContinue(){this.loading=!0,this.setupWizardStore.saveWizard("searchAppearance").then(()=>{this.$router.push(this.setupWizardStore.getNextLink)})},skipStep(){this.setupWizardStore.saveWizard(),this.$router.push(this.setupWizardStore.getNextLink)}},mounted(){this.$nextTick(()=>{this.setupWizardStore.searchAppearance.redirectAttachmentPages=this.optionsStore.dynamicOptions.searchAppearance.postTypes.attachment.redirectAttachmentUrls==="attachment",this.loaded=!0})}},Q={class:"aioseo-wizard-search-appearance"},X={class:"header"},Z={class:"description"},$={class:"aioseo-settings-row no-border"},ee={class:"settings-name"},te={class:"name small-margin"},se={key:1,class:"action"},oe={key:0,class:"site-info"},ie={class:"site-title aioseo-settings-row no-border"},re={class:"settings-name"},ne={class:"name small-margin"},ae=["innerHTML"],le={class:"site-description aioseo-settings-row no-border"},de={class:"settings-name"},ce={class:"name small-margin"},pe=["innerHTML"],ue={class:"settings-name"},me={class:"name small-margin"},_e={key:1,class:"aioseo-settings-row no-border post-types"},he={key:2,class:"aioseo-settings-row no-border enable-sitemaps"},ge={key:3,class:"aioseo-settings-row no-border"},ve={class:"settings-name"},Ce={class:"name small-margin"},Se={key:4,class:"aioseo-settings-row no-border no-margin small-padding"},ye={class:"settings-name"},fe={class:"name small-margin"},Ae={class:"go-back"},ze=o("div",{class:"spacer"},null,-1);function ke(l,t,be,s,e,_){const y=a("wizard-header"),f=a("wizard-steps"),A=a("core-google-search-preview"),h=a("base-button"),v=a("core-html-tags-editor"),g=a("base-radio-toggle"),z=a("base-toggle"),k=a("core-post-type-options"),b=a("base-checkbox"),C=a("router-link"),T=a("wizard-body"),W=a("wizard-close-and-exit"),w=a("wizard-container");return p(),u("div",Q,[r(y),r(w,null,{default:d(()=>[r(T,null,{footer:d(()=>[o("div",Ae,[r(C,{to:s.setupWizardStore.getPrevLink,class:"no-underline"},{default:d(()=>[c("←")]),_:1},8,["to"]),c("   "),r(C,{to:s.setupWizardStore.getPrevLink},{default:d(()=>[c(n(e.strings.goBack),1)]),_:1},8,["to"])]),ze,r(h,{type:"gray",onClick:_.skipStep},{default:d(()=>[c(n(e.strings.skipThisStep),1)]),_:1},8,["onClick"]),r(h,{type:"blue",loading:e.loading,onClick:_.saveAndContinue},{default:d(()=>[c(n(e.strings.saveAndContinue)+" →",1)]),_:1},8,["loading","onClick"])]),default:d(()=>[r(f),o("div",X,n(e.strings.searchAppearance),1),o("div",Z,n(e.strings.description),1),o("div",$,[o("div",ee,[o("div",te,n(e.strings.serpPreview),1)]),o("div",{class:S(["edit-site-info-activator",{hover:e.showHoverClass}]),onMouseenter:t[2]||(t[2]=(...i)=>_.addHoverClass&&_.addHoverClass(...i)),onMouseleave:t[3]||(t[3]=(...i)=>_.removeHoverClass&&_.removeHoverClass(...i))},[r(A,{title:l.parseTags(s.setupWizardStore.category.siteTitle),description:l.parseTags(s.setupWizardStore.category.metaDescription)},null,8,["title","description"]),e.showHoverClass&&!e.editing?(p(),u("div",{key:0,class:"background-fade",onClick:t[0]||(t[0]=i=>e.editing=!0)})):m("",!0),e.showHoverClass&&!e.editing?(p(),u("div",se,[r(h,{size:"small",type:"black",onClick:t[1]||(t[1]=i=>e.editing=!0)},{default:d(()=>[c(n(e.strings.editTitleAndDescription),1)]),_:1})])):m("",!0)],34)]),e.editing?(p(),u("div",oe,[o("div",ie,[o("div",re,[o("div",ne,n(e.strings.siteTitle),1)]),r(v,{modelValue:s.setupWizardStore.category.siteTitle,"onUpdate:modelValue":t[4]||(t[4]=i=>s.setupWizardStore.category.siteTitle=i),"line-numbers":!1,single:"",onCounter:t[5]||(t[5]=i=>l.updateCount(i,"titleCount")),"tags-context":"homePage","default-tags":["site_title","separator_sa","tagline"]},{"tags-description":d(()=>[c(n(e.strings.clickToAddSiteTitle),1)]),_:1},8,["modelValue"]),o("div",{class:"max-recommended-count",innerHTML:l.maxRecommendedCount(e.titleCount,60)},null,8,ae)]),o("div",le,[o("div",de,[o("div",ce,n(e.strings.metaDescription),1)]),r(v,{modelValue:s.setupWizardStore.category.metaDescription,"onUpdate:modelValue":t[6]||(t[6]=i=>s.setupWizardStore.category.metaDescription=i),"line-numbers":!1,onCounter:t[7]||(t[7]=i=>l.updateCount(i,"descriptionCount")),"tags-context":"homePage","default-tags":["site_title","separator_sa","tagline"]},{"tags-description":d(()=>[c(n(e.strings.clickToAddSiteDescription),1)]),_:1},8,["modelValue"]),o("div",{class:"max-recommended-count",innerHTML:l.maxRecommendedCount(e.descriptionCount,160)},null,8,pe)])])):m("",!0),o("div",{class:S(["aioseo-settings-row no-border",[{"no-margin":s.setupWizardStore.searchAppearance.underConstruction},{"small-padding":s.setupWizardStore.searchAppearance.underConstruction}]])},[o("div",ue,[o("div",me,n(e.strings.isSiteUnderConstruction),1)]),r(g,{modelValue:s.setupWizardStore.searchAppearance.underConstruction,"onUpdate:modelValue":t[8]||(t[8]=i=>s.setupWizardStore.searchAppearance.underConstruction=i),name:"underConstruction",options:[{label:e.strings.underConstruction,value:!0,activeClass:"dark"},{label:e.strings.liveSite,value:!1}]},null,8,["modelValue","options"])],2),s.setupWizardStore.searchAppearance.underConstruction?m("",!0):(p(),u("div",_e,[r(z,{size:"medium",modelValue:s.setupWizardStore.searchAppearance.postTypes.postTypes.all,"onUpdate:modelValue":t[9]||(t[9]=i=>s.setupWizardStore.searchAppearance.postTypes.postTypes.all=i)},{default:d(()=>[c(n(e.strings.includeAllPostTypes),1)]),_:1},8,["modelValue"]),s.setupWizardStore.searchAppearance.postTypes.postTypes.all?m("",!0):(p(),L(k,{key:0,options:s.setupWizardStore.searchAppearance.postTypes,type:"postTypes"},null,8,["options"]))])),s.setupWizardStore.searchAppearance.underConstruction?m("",!0):(p(),u("div",he,[r(b,{round:"",class:"no-clicks",type:"green",modelValue:!0,onClick:x(()=>{},["stop","prevent"])},{default:d(()=>[c(n(e.strings.enableSitemap),1)]),_:1})])),s.setupWizardStore.searchAppearance.underConstruction?m("",!0):(p(),u("div",ge,[o("div",ve,[o("div",Ce,n(e.strings.doYouHaveMultipleAuthors),1)]),r(g,{modelValue:s.setupWizardStore.searchAppearance.multipleAuthors,"onUpdate:modelValue":t[10]||(t[10]=i=>s.setupWizardStore.searchAppearance.multipleAuthors=i),name:"multipleAuthors",class:"small",options:[{label:l.$constants.GLOBAL_STRINGS.no,value:!1,activeClass:"dark"},{label:l.$constants.GLOBAL_STRINGS.yes,value:!0}]},null,8,["modelValue","options"])])),s.setupWizardStore.searchAppearance.underConstruction?m("",!0):(p(),u("div",Se,[o("div",ye,[o("div",fe,n(e.strings.redirectAttachmentPages),1)]),r(g,{modelValue:s.setupWizardStore.searchAppearance.redirectAttachmentPages,"onUpdate:modelValue":t[11]||(t[11]=i=>s.setupWizardStore.searchAppearance.redirectAttachmentPages=i),name:"redirectAttachmentPages",class:"small",options:[{label:l.$constants.GLOBAL_STRINGS.no,value:!1,activeClass:"dark"},{label:l.$constants.GLOBAL_STRINGS.yes,value:!0}]},null,8,["modelValue","options"])]))]),_:1}),r(W)]),_:1})])}const ct=B(K,[["render",ke]]);export{ct as default};
