document.addEventListener("click", event => {
    if (event.target.parentElement.matches(".first-sub-menu-armia")) {
      let parent = event.target.parentElement.offsetParent.children;
      for (let item of parent) {
        item.classList.remove("first-activ");
      }
      event.target.parentElement.classList.add("first-activ");
    }

    if (event.target.matches(".btn-radio")) {
      let target = event.target.parentElement.childNodes;
      target.forEach(element => {
        if (element.checked) {
          this.singleArmia(element.id);
          const armia = document.getElementById("armia");
          armia.style.display = "none";
          ToServer();
        }
      });
    }

    if (event.target.matches(".center") || event.target.matches(".close-army")) {
      const armia = document.getElementById("armia");
      armia.style.display = "none";
    }
  });