function insertFooter() {
    fetch("../modules/footer/footer.html")
      .then((response) => response.text())
      .then((data) => {
        document.getElementById("footer").innerHTML = data;
      });
  }