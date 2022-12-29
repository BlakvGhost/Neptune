export const Selector = {
    find(selector,element = document.documentElement){
        return [].concat(...Element.prototype.querySelectorAll.call(element,selector))
    },
    normalChildren(parent,selector){
      return parent.querySelectorAll(selector);
    },
    findOne(selector,element = document.documentElement){
        return Element.prototype.querySelector.call(element,selector)
    },
    children(element,selector){
        return [].concat(...element.children).filter(child => child.matches(selector));
    },
}