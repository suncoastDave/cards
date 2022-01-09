// JavaScript Document

const search = document.getElementById('search');
const matchList = document.getElementById('match-list');


// Search the drugs json and filter it
const searchDrugs = async searchText => {
    const res = await fetch('/wp-json/pc3/v1/drugsearch');
    const drugs = await res.json();

//Get matches to current text input
    let matches = drugs.filter(searchRes => {
        const regex = new RegExp(`^${searchText}`, 'gi');

            return searchRes.name.match(regex);
    });

    if (searchText.length === 0){

        matches = [];
        matchList.innerHTML = '';
    }

   // console.log(matches);

//output the html
    if (searchText.length > 2) {
        outputHtml(matches.slice(0,5));
    }
};


const outputHtml = matches => {
    if(matches.length > 0) {
        const html = matches.map(
            match => `
        <a class="arrow-toggleable"  href='coupon/index.php?drug=${match.hyphen}&ndc=${match.ndc}&quantity=${match.quantity}'>
        <div class="searchList">
        <span class="h5">${match.name}</span>  
        </div>
        </a>
`).join('');

        matchList.innerHTML = html;
    }
}

search.addEventListener('input', () => searchDrugs(search.value));
