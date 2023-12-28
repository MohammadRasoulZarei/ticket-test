persian={0:'?',1:'?',2:'?',3:'?',4:'?',5:'?',6:'?',7:'?',8:'?',9:'?'};
function traverse(el){
    if(el.nodeType==3){
        var list=el.data.match(/[0-9]/g);
        if(list!=null && list.length!=0){
            for(var i=0;i<list.length;i++)
                el.data=el.data.replace(list[i],persian[list[i]]);
        }
    }
    for(var i=0;i<el.childNodes.length;i++){
        traverse(el.childNodes[i]);
    }
}