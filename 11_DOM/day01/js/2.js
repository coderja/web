/*function getChild(parent){
  console.log(parent.nodeName)
  var children = parent.children;
  for(var i=0,len=children.length;i<len;i++){
    arguments.callee(children[i])
  }
}
getChild(document.body) */

function getChild(parent){
  var Iterator = document.createNodeIterator(
    parent,NodeFilter.SHOW_ELEMENT,null,false	  
  )
	  var node;
  while((node=Iterator.nextNode())!=null){
    console.log(node.nodeName)
  } 
}
getChild(document.body)