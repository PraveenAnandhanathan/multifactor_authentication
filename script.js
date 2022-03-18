function val1(){
  var country = document.plan.country;
  var budget = document.plan.budget;
  if(ser_val(country)){
      if(budget_val(budget)){
          if(filter(country,budget)){
            return true;
          }
      }
  }
  return false;
  }
  function ser_val(country){
      if(country.value == "default"){
        swal("Please select the Packages",{timer: 2000});
          return false;
      }
      else{
          return true;
      }
  }
  function budget_val(budget){
      if(budget.value == "default"){
        swal("Please select the Budget",{timer: 2000});
          return false;
      }
      else{
          return true;
      }
  }
  function filter(country,budget){
      if(country.value == "europe" && budget.value == "10000"){
        document.getElementById("spain").style.display = "none";
        document.getElementById("jewel").style.display = "none";
        document.getElementById("soulsin").style.display = "none";
        document.getElementById("bintan").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("neil").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("pattaya").style.display = "none";
        document.getElementById("ebali").style.display = "none";
        document.getElementById("snorth").style.display = "none";
        document.getElementById("sikkim").style.display = "none";
        window.location.hash = "vendor";
      }
      if(country.value == "europe" && budget.value == "50000"){
        document.getElementById("swiss").style.display = "none";
        document.getElementById("jewel").style.display = "none";
        document.getElementById("soulsin").style.display = "none";
        document.getElementById("bintan").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("neil").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("pattaya").style.display = "none";
        document.getElementById("ebali").style.display = "none";
        document.getElementById("snorth").style.display = "none";
        document.getElementById("sikkim").style.display = "none";
        window.location.hash = "vendor";
      }
      if(country.value == "europe" && budget.value == "60000"){
        document.getElementById("swiss").style.display = "none";
        document.getElementById("spain").style.display = "none";
        document.getElementById("jewel").style.display = "none";
        document.getElementById("soulsin").style.display = "none";
        document.getElementById("bintan").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("neil").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("pattaya").style.display = "none";
        document.getElementById("ebali").style.display = "none";
        document.getElementById("snorth").style.display = "none";
        document.getElementById("sikkim").style.display = "none";
        window.location.hash = "vendor";
      }
      if(country.value == "europe" && budget.value == "75000"){
        document.getElementById("swiss").style.display = "none";
        document.getElementById("spain").style.display = "none";
        document.getElementById("soulsin").style.display = "none";
        document.getElementById("bintan").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("neil").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("pattaya").style.display = "none";
        document.getElementById("ebali").style.display = "none";
        document.getElementById("snorth").style.display = "none";
        document.getElementById("sikkim").style.display = "none";
        window.location.hash = "vendor";
      }
      if(country.value == "singa" && budget.value == "10000"){
        document.getElementById("swiss").style.display = "none";
        document.getElementById("spain").style.display = "none";
        document.getElementById("jewel").style.display = "none";
        document.getElementById("soulsin").style.display = "none";
        document.getElementById("bintan").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("neil").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("pattaya").style.display = "none";
        document.getElementById("ebali").style.display = "none";
        document.getElementById("snorth").style.display = "none";
        document.getElementById("sikkim").style.display = "none";
        window.location.hash = "vendor";
      }
      if(country.value == "singa" && budget.value == "50000"){
        document.getElementById("swiss").style.display = "none";
        document.getElementById("spain").style.display = "none";
        document.getElementById("jewel").style.display = "none";
        document.getElementById("bintan").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("neil").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("pattaya").style.display = "none";
        document.getElementById("ebali").style.display = "none";
        document.getElementById("snorth").style.display = "none";
        document.getElementById("sikkim").style.display = "none";
        window.location.hash = "vendor";
      }
      if(country.value == "singa" && budget.value == "60000"){
        document.getElementById("swiss").style.display = "none";
        document.getElementById("spain").style.display = "none";
        document.getElementById("jewel").style.display = "none";
        document.getElementById("soulsin").style.display = "none";
        document.getElementById("bintan").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("neil").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("pattaya").style.display = "none";
        document.getElementById("ebali").style.display = "none";
        document.getElementById("snorth").style.display = "none";
        document.getElementById("sikkim").style.display = "none";
        window.location.hash = "vendor";
      }
      if(country.value == "singa" && budget.value == "75000"){
        document.getElementById("swiss").style.display = "none";
        document.getElementById("spain").style.display = "none";
        document.getElementById("jewel").style.display = "none";
        document.getElementById("soulsin").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("neil").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("pattaya").style.display = "none";
        document.getElementById("ebali").style.display = "none";
        document.getElementById("snorth").style.display = "none";
        document.getElementById("sikkim").style.display = "none";
        window.location.hash = "vendor";
      }
      if(country.value == "andam" && budget.value == "10000"){
        document.getElementById("swiss").style.display = "none";
        document.getElementById("spain").style.display = "none";
        document.getElementById("jewel").style.display = "none";
        document.getElementById("soulsin").style.display = "none";
        document.getElementById("bintan").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("pattaya").style.display = "none";
        document.getElementById("ebali").style.display = "none";
        document.getElementById("snorth").style.display = "none";
        document.getElementById("sikkim").style.display = "none";
        window.location.hash = "vendor";
      }
      if(country.value == "andam" && budget.value == "50000"){
        document.getElementById("swiss").style.display = "none";
        document.getElementById("spain").style.display = "none";
        document.getElementById("jewel").style.display = "none";
        document.getElementById("soulsin").style.display = "none";
        document.getElementById("bintan").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("neil").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("pattaya").style.display = "none";
        document.getElementById("ebali").style.display = "none";
        document.getElementById("snorth").style.display = "none";
        document.getElementById("sikkim").style.display = "none";
        window.location.hash = "vendor";
      }
      if(country.value == "andam" && budget.value == "60000"){
        document.getElementById("swiss").style.display = "none";
        document.getElementById("spain").style.display = "none";
        document.getElementById("jewel").style.display = "none";
        document.getElementById("soulsin").style.display = "none";
        document.getElementById("bintan").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("neil").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("pattaya").style.display = "none";
        document.getElementById("ebali").style.display = "none";
        document.getElementById("snorth").style.display = "none";
        document.getElementById("sikkim").style.display = "none";
        window.location.hash = "vendor";
      }
      if(country.value == "andam" && budget.value == "75000"){
        document.getElementById("swiss").style.display = "none";
        document.getElementById("spain").style.display = "none";
        document.getElementById("jewel").style.display = "none";
        document.getElementById("soulsin").style.display = "none";
        document.getElementById("bintan").style.display = "none";
        document.getElementById("neil").style.display = "none";
        document.getElementById("pattaya").style.display = "none";
        document.getElementById("ebali").style.display = "none";
        document.getElementById("snorth").style.display = "none";
        document.getElementById("sikkim").style.display = "none";
        window.location.hash = "vendor";
      }
      if(country.value == "thail" && budget.value == "10000"){
        document.getElementById("swiss").style.display = "none";
        document.getElementById("spain").style.display = "none";
        document.getElementById("jewel").style.display = "none";
        document.getElementById("soulsin").style.display = "none";
        document.getElementById("bintan").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("neil").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("pattaya").style.display = "none";
        document.getElementById("ebali").style.display = "none";
        document.getElementById("snorth").style.display = "none";
        document.getElementById("sikkim").style.display = "none";
        window.location.hash = "vendor";
      }
      if(country.value == "thail" && budget.value == "50000"){
        document.getElementById("swiss").style.display = "none";
        document.getElementById("spain").style.display = "none";
        document.getElementById("jewel").style.display = "none";
        document.getElementById("soulsin").style.display = "none";
        document.getElementById("bintan").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("neil").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("pattaya").style.display = "none";
        document.getElementById("ebali").style.display = "none";
        document.getElementById("snorth").style.display = "none";
        document.getElementById("sikkim").style.display = "none";
        window.location.hash = "vendor";
      }
      if(country.value == "thail" && budget.value == "60000"){
        document.getElementById("swiss").style.display = "none";
        document.getElementById("spain").style.display = "none";
        document.getElementById("jewel").style.display = "none";
        document.getElementById("soulsin").style.display = "none";
        document.getElementById("bintan").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("neil").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("ebali").style.display = "none";
        document.getElementById("snorth").style.display = "none";
        document.getElementById("sikkim").style.display = "none";
        window.location.hash = "vendor";
      }
      if(country.value == "thail" && budget.value == "75000"){
        document.getElementById("swiss").style.display = "none";
        document.getElementById("spain").style.display = "none";
        document.getElementById("jewel").style.display = "none";
        document.getElementById("soulsin").style.display = "none";
        document.getElementById("bintan").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("neil").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("pattaya").style.display = "none";
        document.getElementById("ebali").style.display = "none";
        document.getElementById("snorth").style.display = "none";
        document.getElementById("sikkim").style.display = "none";
        window.location.hash = "vendor";
      }
      if(country.value == "bal" && budget.value == "10000"){
        document.getElementById("swiss").style.display = "none";
        document.getElementById("spain").style.display = "none";
        document.getElementById("jewel").style.display = "none";
        document.getElementById("soulsin").style.display = "none";
        document.getElementById("bintan").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("neil").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("pattaya").style.display = "none";
        document.getElementById("snorth").style.display = "none";
        document.getElementById("sikkim").style.display = "none";
        window.location.hash = "vendor";
      }
      if(country.value == "bal" && budget.value == "50000"){
        document.getElementById("swiss").style.display = "none";
        document.getElementById("spain").style.display = "none";
        document.getElementById("jewel").style.display = "none";
        document.getElementById("soulsin").style.display = "none";
        document.getElementById("bintan").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("neil").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("pattaya").style.display = "none";
        document.getElementById("ebali").style.display = "none";
        document.getElementById("snorth").style.display = "none";
        document.getElementById("sikkim").style.display = "none";
        window.location.hash = "vendor";
      }
      if(country.value == "bal" && budget.value == "60000"){
        document.getElementById("swiss").style.display = "none";
        document.getElementById("spain").style.display = "none";
        document.getElementById("jewel").style.display = "none";
        document.getElementById("soulsin").style.display = "none";
        document.getElementById("bintan").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("neil").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("pattaya").style.display = "none";
        document.getElementById("ebali").style.display = "none";
        document.getElementById("snorth").style.display = "none";
        document.getElementById("sikkim").style.display = "none";
        window.location.hash = "vendor";
      }
      if(country.value == "bal" && budget.value == "75000"){
        document.getElementById("swiss").style.display = "none";
        document.getElementById("spain").style.display = "none";
        document.getElementById("jewel").style.display = "none";
        document.getElementById("soulsin").style.display = "none";
        document.getElementById("bintan").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("neil").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("pattaya").style.display = "none";
        document.getElementById("ebali").style.display = "none";
        document.getElementById("snorth").style.display = "none";
        document.getElementById("sikkim").style.display = "none";
        window.location.hash = "vendor";
      }
      if(country.value == "northea" && budget.value == "10000"){
        document.getElementById("swiss").style.display = "none";
        document.getElementById("spain").style.display = "none";
        document.getElementById("jewel").style.display = "none";
        document.getElementById("soulsin").style.display = "none";
        document.getElementById("bintan").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("neil").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("pattaya").style.display = "none";
        document.getElementById("ebali").style.display = "none";
        document.getElementById("snorth").style.display = "none";
        document.getElementById("sikkim").style.display = "none";
        window.location.hash = "vendor";
      }
      if(country.value == "northea" && budget.value == "50000"){
        document.getElementById("swiss").style.display = "none";
        document.getElementById("spain").style.display = "none";
        document.getElementById("jewel").style.display = "none";
        document.getElementById("soulsin").style.display = "none";
        document.getElementById("bintan").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("neil").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("pattaya").style.display = "none";
        document.getElementById("ebali").style.display = "none";
        document.getElementById("sikkim").style.display = "none";
        window.location.hash = "vendor";
      }
      if(country.value == "northea" && budget.value == "60000"){
        document.getElementById("swiss").style.display = "none";
        document.getElementById("spain").style.display = "none";
        document.getElementById("jewel").style.display = "none";
        document.getElementById("soulsin").style.display = "none";
        document.getElementById("bintan").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("neil").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("pattaya").style.display = "none";
        document.getElementById("ebali").style.display = "none";
        document.getElementById("snorth").style.display = "none";
        window.location.hash = "vendor";
      }
      if(country.value == "northea" && budget.value == "75000"){
        document.getElementById("swiss").style.display = "none";
        document.getElementById("spain").style.display = "none";
        document.getElementById("jewel").style.display = "none";
        document.getElementById("soulsin").style.display = "none";
        document.getElementById("bintan").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("neil").style.display = "none";
        document.getElementById("androm").style.display = "none";
        document.getElementById("pattaya").style.display = "none";
        document.getElementById("ebali").style.display = "none";
        document.getElementById("snorth").style.display = "none";
        document.getElementById("sikkim").style.display = "none";
        window.location.hash = "vendor";
      }
      else{}
  }

  function val2(){
    document.plan.country.value = "default";
    document.plan.budget.value = "default";
    document.getElementById("swiss").style.display = "inline-block";
    document.getElementById("spain").style.display = "inline-block";
    document.getElementById("jewel").style.display = "inline-block";
    document.getElementById("soulsin").style.display = "inline-block";
    document.getElementById("bintan").style.display = "inline-block";
    document.getElementById("androm").style.display = "inline-block";
    document.getElementById("neil").style.display = "inline-block";
    document.getElementById("pattaya").style.display = "inline-block";
    document.getElementById("ebali").style.display = "inline-block";
    document.getElementById("snorth").style.display = "inline-block";
    document.getElementById("sikkim").style.display  = "inline-block";
    }