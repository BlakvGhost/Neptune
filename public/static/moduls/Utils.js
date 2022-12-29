import {Selector} from './Dom/selector.js'
import {Rules,NativesRules,errs as Errors,initErrors} from './Form/Rules.js'
const ELM_SELECTOR = 'input,textarea,select,button';
const ARIA_CONTROLS = `[data-a-control='true']`;
const ALERT_NODE = `div`;
const ALERT_FIELD = `alert-a-form`;
const ALERT_FIELD_ITEMS = `alert-item`;
const ERROR_FIELD = `error`;
const SUCCESS_FIELD = `success`;
const ALERT_FIELD_SELECTOR = `.alert-a-form`;
const ALERT_FIELD_ITEMS_SELECTOR = `.alert-item`;
const FIELD_INVALID = `alert-is-invalid`;
const FIELD_VALID = `alert-is-valid`;


export class Form {
    constructor(o) {
        this.o = Selector.findOne(o);
    }
    checkRules(p,rules=Rules){
        initErrors();
        let c = Selector.normalChildren(this.o,ALERT_FIELD_SELECTOR);
        c = c.length === 0 ? null : c.forEach((e) => e.remove());
        c = Selector.normalChildren(this.o,ARIA_CONTROLS);

        for (let [a,b] of Object.entries(rules) ) {
            c.forEach(function (e){
                if (a === e.name){
                    b['rules'].forEach(function (d){
                        let l = d.indexOf('{')+1,of = d.indexOf('}');
                        let p = d.slice(l,of),o = of < 0 ? d : d.slice(0,l-1) ;
                        NativesRules.forEach(function (f){
                            if (o === f.name) {
                                let n = b['errors'][o] ?? `Erreur dans le champs ${e.name}` ;
                                f(p, n, e);
                            }
                        });
                    })
                }
            });
        }
        p = Selector.findOne(p);
        if ((p === undefined) || (p === null)){
            c.forEach(function (e){
                for (let [a,b] of Object.entries(Errors) ) {
                    if (e.name === a){
                       let v = document.createElement(ALERT_NODE);
                       v.classList.add(ERROR_FIELD,ALERT_FIELD);
                       for (let t of b) v.innerHTML += `<div class="${ALERT_FIELD_ITEMS}" aria-labelledby="${a}"><strong>* ${t}</strong></div>`;
                       e.insertAdjacentElement('beforebegin',v);
                       e.classList.add(FIELD_INVALID);
                    }
                }
            })
        }else {
            let v = document.createElement(ALERT_NODE);
            v.classList.add(ERROR_FIELD,ALERT_FIELD);
            for (let [a,b] of Object.entries(Errors) ) {
               for (let t of b) v.innerHTML += `<div class="${ALERT_FIELD_ITEMS}" aria-labelledby="${a}"><strong>* ${t}</strong></div>`;
               p.append(v);
           }
        }
        let d = Selector.normalChildren(document,ALERT_FIELD_ITEMS_SELECTOR);
        d.forEach(function (e){
            e.onclick = (t)=>{
                Selector.findOne(`[name="${e.getAttribute('aria-labelledby')}"]`).focus();
            }
        })
        return Errors;
    }
}