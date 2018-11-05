
    var hasPurchased = Cookies.get("Purchased");
    if (hasPurchased){

    } else {
      window.alert("You aren't allowed here!");
      window.location.replace("../paypal/");
    }
