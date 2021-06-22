function alerted(){
    var a = document.forms["Form"]["fname"].value;
    var b = document.forms["Form"]["lemail"].value;
    
    if (a == null || a == "", b == null || b == "") {
      alert("Butinai uzpildyti visus laukus!");
      return false;
    }
    else{
        alert("Formos laukai uzpildyti gerai");
    }
    }
  
