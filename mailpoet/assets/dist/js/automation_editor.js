"use strict";(self.webpackChunk=self.webpackChunk||[]).push([[392],{8278:function(e,t,a){var i=a(26372),o=a.n(i),s=a(2226),n=a(70079),r=a(8334),l=a(19382),c=a(57995),d=a(65317),m=a(46824),u=a(81433),p=a(56249),h=a(15063),b=e=>"web"in e?e.web:e.default,_=a(64645),g=a(97393),v=a(18883),x=a(7936),j=a(15312),S=a(89912),f=a(87895),N=(a(4114),a(35250)),y=a(48405),w=a(84638);function A(){const{isSidebarOpened:e,selectedStep:t,savedState:a}=(0,p.Z)((e=>({isSidebarOpened:e(w.storeName).isSidebarOpened,selectedStep:e(w.storeName).getSelectedStep,savedState:e(w.storeName).getSavedState()}))),{openSidebar:i,closeSidebar:o,save:s,toggleFeature:r}=(0,y.Z)(w.storeName),{registerShortcut:l}=(0,y.Z)(v.h);return(0,n.useEffect)((()=>{l({name:"mailpoet/automation-editor/toggle-fullscreen",category:"global",description:(0,x.__)("Toggle fullscreen mode.","mailpoet"),keyCombination:{modifier:"secondary",character:"f"}}),l({name:"mailpoet/automation-editor/toggle-sidebar",category:"global",description:(0,x.__)("Show or hide the settings sidebar.","mailpoet"),keyCombination:{modifier:"primaryShift",character:","}}),l({name:"mailpoet/automation-editor/save",category:"global",description:(0,x.__)("Save your changes.","mailpoet"),keyCombination:{modifier:"primary",character:"s"}})}),[l]),(0,v.bx)("mailpoet/automation-editor/toggle-fullscreen",(()=>{r("fullscreenMode")})),(0,v.bx)("mailpoet/automation-editor/toggle-sidebar",(a=>{if(a.preventDefault(),e())o();else{const e=t()?w.stepSidebarKey:w.automationSidebarKey;i(e)}})),(0,v.bx)("mailpoet/automation-editor/save",(e=>{e.preventDefault(),"unsaved"===a&&s()})),null}var Z=a(95858),k=a(51213);function D(e){let{sidebarKey:t}=e;const{openSidebar:a}=(0,y.Z)(w.storeName),[i,o]=t===w.automationSidebarKey?[(0,x.__)("Automation (selected)","mailpoet"),"is-active"]:[(0,x.__)("Automation","mailpoet"),""],[s,n]=t===w.stepSidebarKey?[(0,x.__)("Step (selected)","mailpoet"),"is-active"]:[(0,x.__)("Step","mailpoet"),""];return(0,N.jsxs)("ul",{children:[(0,N.jsx)("li",{children:(0,N.jsx)(l.ZP,{onClick:()=>a(w.automationSidebarKey),className:`edit-site-sidebar-edit-mode__panel-tab ${o}`,"aria-label":i,"data-label":(0,x.__)("Automation","mailpoet"),children:(0,x.__)("Automation","mailpoet")})}),(0,N.jsx)("li",{children:(0,N.jsx)(l.ZP,{onClick:()=>a(w.stepSidebarKey),className:`edit-site-sidebar-edit-mode__panel-tab ${n}`,"aria-label":s,"data-label":(0,x.__)("Step","mailpoet"),children:(0,x.__)("Step","mailpoet")})})]})}var C=a(68806),E=a(85606),L=a(47294),O=a(48927),I=a(66276);function K(e){let{title:t,description:a,icon:i}=e;return(0,N.jsxs)("div",{className:"block-editor-block-card",children:[(0,N.jsx)(I.Z,{icon:i}),(0,N.jsxs)("div",{className:"block-editor-block-card__content",children:[(0,N.jsx)("h2",{className:"block-editor-block-card__title",children:t}),(0,N.jsx)("span",{className:"block-editor-block-card__description",children:a})]})]})}function P(){const{errors:e}=(0,p.Z)((e=>({errors:e(w.storeName).getStepError(e(w.storeName).getSelectedStep().id)})),[]);if(!e||!e?.fields)return null;const t=e.fields?.general;return t?(0,N.jsx)(C.Z,{isDismissible:!1,status:"error",children:t}):null}function F(){const{selectedStep:e,selectedStepType:t}=(0,p.Z)((e=>({selectedStep:e(w.storeName).getSelectedStep(),selectedStepType:e(w.storeName).getSelectedStepType()})),[]);if(!e)return(0,N.jsx)(E.Z,{children:"No step selected."});if(!t)return(0,N.jsx)(E.Z,{children:"Unknown step type."});const a=t.edit;return(0,N.jsxs)("div",{className:"block-editor-block-inspector",children:[(0,N.jsx)(P,{}),(0,N.jsx)(K,{title:t.title(e,"sidebar"),description:t.description(e,"sidebar"),icon:t.icon}),(0,N.jsx)(a,{},e.id),"trigger"===e.type&&(0,N.jsx)(O.G9,{strings:L.E})]})}var T=a(86558),V=a(77309),M=a(34379),B=a(84209);function G(){const e=B.Hooks.applyFilters("mailpoet.automation.settings.render",{});return 0===Object.keys(e).length?null:(0,N.jsx)(E.Z,{title:(0,x.__)("Automation settings","mailpoet"),initialOpen:!0,children:Object.keys(e).map((t=>(0,N.jsx)(T.Z,{children:e[t]},t)))})}function q(){const{automationData:e}=(0,p.Z)((e=>({automationData:e(w.storeName).getAutomationData()})),[]),t={year:"numeric",month:"long",day:"numeric"};return(0,N.jsxs)(N.Fragment,{children:[(0,N.jsxs)(E.Z,{title:(0,x.__)("Automation details","mailpoet"),initialOpen:!0,children:[(0,N.jsxs)(T.Z,{children:[(0,N.jsx)("strong",{children:"Date added"})," ",new Date(Date.parse(e.created_at)).toLocaleDateString(M.locale.toString(),t)]}),(0,N.jsxs)(T.Z,{children:[(0,N.jsx)("strong",{children:"Activated"})," ","active"===e.status&&new Date(Date.parse(e.updated_at)).toLocaleDateString(M.locale.toString(),t),"active"!==e.status&&e.activated_at&&new Date(Date.parse(e.activated_at)).toLocaleDateString(M.locale.toString(),t),"active"!==e.status&&!e.activated_at&&(0,N.jsx)("span",{className:"mailpoet-deactive",children:"Not activated yet."})]}),(0,N.jsxs)(T.Z,{children:[(0,N.jsx)("strong",{children:"Author"})," ",e.author.name]}),(0,N.jsx)(T.Z,{children:(0,N.jsx)(V.Q,{})})]}),(0,N.jsx)(G,{})]})}const z=b({web:!0,native:!1});function H(e){const{keyboardShortcut:t,sidebarKey:a,showIconLabels:i,automationName:o}=(0,p.Z)((e=>({keyboardShortcut:e(v.h).getShortcutRepresentation("mailpoet/automation-editor/toggle-sidebar"),sidebarKey:e(g.h).getActiveComplementaryArea(w.storeName)??w.automationSidebarKey,showIconLabels:e(w.storeName).isFeatureActive("showIconLabels"),automationName:e(w.storeName).getAutomationData().name})),[]);return(0,N.jsxs)(g.Vi,{identifier:a,header:(0,N.jsx)(D,{sidebarKey:a}),closeLabel:(0,x.__)("Close settings","mailpoet"),headerClassName:"edit-site-sidebar-edit-mode__panel-tabs",title:(0,x.__)("Settings","mailpoet"),icon:k.Z,className:"edit-site-sidebar mailpoet-automation-sidebar",panelClassName:"edit-site-sidebar",smallScreenTitle:o||(0,x.__)("(no title)","mailpoet"),scope:w.storeName,toggleShortcut:t,isActiveByDefault:z,showIconLabels:i,...e,children:[a===w.automationSidebarKey&&(0,N.jsx)(q,{}),a===w.stepSidebarKey&&(0,N.jsx)(F,{})]})}var Q=a(75233),R=a(96854),W=a(69177),$=a(55382),U=a(77159),J=a(79951),X=a(15128),Y=a(26462);function ee(e){let{onClose:t}=e;const[a,i]=(0,n.useState)(!1),{activate:o}=(0,y.Z)(w.storeName);return(0,N.jsxs)(N.Fragment,{children:[(0,N.jsxs)("div",{className:"mailpoet-automation-activate-panel__header",children:[(0,N.jsx)("div",{className:"mailpoet-automation-activate-panel__header-activate-button",children:(0,N.jsxs)(l.ZP,{variant:"primary",disabled:a,isBusy:a,autoFocus:!a,onClick:()=>{i(!0),o()},children:[a&&(0,x.__)("Activating…","mailpoet"),!a&&(0,x.__)("Activate","mailpoet")]})}),(0,N.jsx)("div",{className:"mailpoet-automation-activate-panel__header-cancel-button",children:(0,N.jsx)(l.ZP,{variant:"secondary",onClick:t,disabled:a,children:(0,x.__)("Cancel","mailpoet")})})]}),a&&(0,N.jsx)("div",{className:"mailpoet-automation-activate-panel__body",children:(0,N.jsx)(J.ZP,{})}),!a&&(0,N.jsxs)("div",{className:"mailpoet-automation-activate-panel__body",children:[(0,N.jsx)("p",{children:(0,N.jsx)("strong",{children:(0,x.__)("Are you ready to activate?","mailpoet")})}),(0,N.jsx)("p",{children:(0,x.__)("Double-check your settings before activating.","mailpoet")})]})]})}function te(e){let{onClose:t}=e;const{automation:a}=(0,p.Z)((e=>({automation:e(w.storeName).getAutomationData()})),[]);return(0,N.jsxs)(N.Fragment,{children:[(0,N.jsx)("div",{className:"mailpoet-automation-activate-panel__header",children:(0,N.jsx)(l.ZP,{icon:X.Z,onClick:t,label:(0,x.__)("Close","mailpoet")})}),(0,N.jsxs)("div",{className:"mailpoet-automation-activate-panel__body",children:[(0,N.jsx)("div",{className:"mailpoet-automation-activate-panel__section",children:(0,x.sprintf)((0,x.__)('"%s" is now live.',"mailpoet"),a.name)}),(0,N.jsx)("p",{children:(0,N.jsx)("strong",{children:(0,x.__)("What’s next?","mailpoet")})}),(0,N.jsx)("p",{children:(0,x.__)("View all your automations to track statistics and create new ones.","mailpoet")}),(0,N.jsx)(l.ZP,{variant:"secondary",onClick:()=>{window.location.href=W.MailPoet.urls.automationListing},children:(0,x.__)("View all automations","mailpoet")})]})]})}function ae(){const{automation:e,errors:t}=(0,p.Z)((e=>({errors:e(w.storeName).getErrors(),automation:e(w.storeName).getAutomationData()})),[]),{closeActivationPanel:a}=(0,y.Z)(w.storeName);if((0,n.useEffect)((()=>{t&&a()}),[t,a]),t)return null;const i=e.status===Y.b.ACTIVE;return(0,N.jsxs)("div",{className:"mailpoet-automation-activate-panel",children:[i&&(0,N.jsx)(te,{onClose:a}),!i&&(0,N.jsx)(ee,{onClose:a})]})}var ie=a(59956);function oe(e){return"saved"!==(0,u.select)(w.storeName).getSavedState()?(e.returnValue=(0,x.__)("There are unsaved changes that will be lost. Do you want to continue?","mailpoet"),e.returnValue):""}function se(){const{isFullscreenActive:e,isInserterOpened:t,isActivationPanelOpened:a,isSidebarOpened:i,showIconLabels:s,automation:h}=(0,p.Z)((e=>({isFullscreenActive:e(w.storeName).isFeatureActive("fullscreenMode"),isInserterOpened:e(w.storeName).isInserterSidebarOpened(),isSidebarOpened:e(w.storeName).isSidebarOpened(),isActivationPanelOpened:e(w.storeName).isActivationPanelOpened(),showIconLabels:e(w.storeName).isFeatureActive("showIconLabels"),automation:e(w.storeName).getAutomationData()})),[]),[b,S]=(0,n.useState)(!0);(0,n.useEffect)((()=>(window.addEventListener("beforeunload",oe),()=>window.removeEventListener("beforeunload",oe))),[]),(0,n.useEffect)((()=>{b&&(function(){const e=(0,u.select)(w.storeName).getAutomationData();if(![Y.b.ACTIVE,Y.b.DEACTIVATING].includes(e.status))return;if(0===e.stats.totals.in_progress)return;const{createNotice:t}=(0,u.dispatch)(m.store);t("success",(0,x.__)("Editing an active automation is temporarily unavailable. We are working on introducing this functionality.","mailpoet"),{type:"snackbar"})}(),S(!1))}),[b]);const y=o()("interface-interface-skeleton",{"is-sidebar-opened":i,"show-icon-labels":s});return"trash"===h.status?(window.location.href=(0,j.f)(W.MailPoet.urls.automationListing,{notice:$.f.automationHadBeenDeleted}),null):(0,N.jsx)(v.vn,{children:(0,N.jsxs)(r.zt,{children:[(0,N.jsx)(g.x4,{isActive:e}),(0,N.jsx)(A,{}),(0,N.jsx)(H,{}),(0,N.jsx)(g.v4,{className:y,drawer:e&&(0,N.jsx)("div",{className:"edit-site-navigation-toggle",children:(0,N.jsx)(l.ZP,{className:"edit-site-navigation-toggle__button has-icon",href:"admin.php?page=mailpoet-automation",children:(0,N.jsx)(c.Z,{size:36,icon:_.Z})})}),header:(0,N.jsx)(f.h4,{showInserterToggle:!1}),content:(0,N.jsxs)(N.Fragment,{children:[(0,N.jsx)(Z.s,{}),(0,N.jsx)(Q.q,{context:"edit"})]}),sidebar:(0,N.jsx)(g.Vi.Slot,{scope:w.storeName}),secondarySidebar:null}),a&&(0,N.jsx)(ae,{}),(0,N.jsx)(d.Z.Slot,{})]})})}window.addEventListener("DOMContentLoaded",(()=>{if((0,x.setLocaleData)(window.wp.i18n.getLocaleData()),void 0!==window.wp.date.getSettings){const e=window.wp;(0,h.setSettings)(e.date.getSettings())}else{const e=window.wp;(0,h.setSettings)(e.date.__experimentalGetSettings())}(0,w.createStore)();const e=b({web:!0,native:!1});(0,u.dispatch)(g.h).enableComplementaryArea(w.storeName,e?w.automationSidebarKey:void 0);const t=document.getElementById("mailpoet_automation_editor");t&&((0,S.registerTranslations)(),U.default.use((async(e,t)=>{try{return await t(e)}catch(t){if(e.signal?.aborted)return;const a=t,i=a.data?.status;if("mailpoet_automation_not_valid"===a.code)return void(0,u.dispatch)(w.storeName).setErrors({steps:a.data.errors});if(i&&i>=400&&i<500){const e=a.message;return(0,u.dispatch)(m.store).createErrorNotice(e??(0,x.__)("An unknown error occurred.","mailpoet"),{explicitDismiss:!0}),void(0,u.dispatch)(w.storeName).setErrors({steps:[]})}throw(0,u.dispatch)(m.store).createErrorNotice((0,x.__)("An unknown error occurred.","mailpoet"),{explicitDismiss:!0}),t}})),(0,R.q)(),(0,ie.R)(),(0,s.s)(t).render((0,N.jsx)(se,{})))}))},65311:function(e){e.exports=jQuery}},function(e){e.O(0,[351],(function(){return 8278,e(e.s=8278)})),e.O()}]);