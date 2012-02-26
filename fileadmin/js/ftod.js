//filler text on demand
// http://web-graphics.com/mtarchive/001667.php

var words=new Array('lorem','ipsum','dolor','sit','amet','consectetuer','adipiscing','elit','suspendisse','eget','diam','quis','diam','consequat','interdum');

function AddFillerLink(){
if(!document.getElementById || !document.createElement) return;
var i,l;
for(i=0;i<arguments.length;i++){

  if (document.getElementById(arguments[i])) { /* Check elements exists - add Reinhard Hiebl */
    l=document.createElement("a");
    l.href="#";
    l.appendChild(document.createTextNode("Add Text"));
    l.onclick=function(){AddText(this);return(false)};
    document.getElementById(arguments[i]).appendChild(l);
      b=document.createTextNode(" | ");
      document.getElementById(arguments[i]).appendChild(b);
      r=document.createElement("a");
      r.href="#";
      r.appendChild(document.createTextNode("Remove Text"));
    r.onclick=function(){RemoveText(this);return(false)};
      document.getElementById(arguments[i]).appendChild(r);
  }
}
}

function AddText(el){
var s="",n,i;
n=RandomNumber(20,80);
for(i=0;i<n;i++)
    s+=words[RandomNumber(0,words.length-1)]+" ";
var t=document.createElement("p");
t.setAttribute('class','added');
t.appendChild(document.createTextNode(s));
el.parentNode.insertBefore(t,el);
}
function RemoveText(el){
  var parent = el.parentNode;
  for(var i=0;i<parent.childNodes.length;i++) {
    var para = parent.childNodes[i];
    if(para.nodeName == "P" && para.getAttribute('class')=='added') {
      parent.removeChild(para);
      break;
    }
  }
}
function RandomNumber(n1,n2){
return(Math.floor(Math.random()*(n2-n1))+n1);
}
