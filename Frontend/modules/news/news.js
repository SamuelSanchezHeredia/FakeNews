let upvoteBtn;
let upvoteCount = 0;

async function newsData() {
  try {
    const url = await fetch("https://newsapi.org/v2/top-headlines?country=de&apiKey=42d2cd84c6d446419299f27fc825ea4f");
    const response = await url.json();
    console.log(response);

    if (response.status === "ok") {
      const articles = response.articles.slice(0, 4);

      const newsSection = document.getElementsByClassName("ag-courses_box")[0];

      articles.forEach((article) => {
        let link = document.createElement("a");
        link.classList.add("ag-courses_item");

        let linkBg = document.createElement("div");
        linkBg.classList.add("ag-courses-item_bg"); 

        let title = document.createElement("div");
        title.classList.add("ag-courses-item_title");
        title.textContent = article.title;

        let date =document.createElement("span");
        date.classList.add("ag-courses-item_date");
        date.textContent = "4.11.2023";

        let dateBox = docuemnt.createElement("div");
        dateBox.classList.add("ag-courses-item_date-box");
        dateBox.textContent = "Start:";

        newsSection.appendChild(link);
        link.appendChild(linkBg);
        link.appendChild(title);
        link.appendChild(dateBox);
        dateBox.appendChild(date);
      });
    }
  } catch (error) {
    console.error("Fehler beim Abrufen der Daten:", error);
  }
}

newsData();
