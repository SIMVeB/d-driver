require('./bootstrap');
let filterField = document.getElementById('filterField');
console.log("envent handle");

if (!!filterField) {
    filterField.addEventListener('change', e => {
        let value = e.target.value;
        if (!value) return;

        let url = new URL(window.location.href);
        url.searchParams.set('filter', value);
        console.log(url);
        window.location.href = url; // reloads the page
    });
}
