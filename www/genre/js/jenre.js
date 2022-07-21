let frmGemre = document.querySelector("form");
let txtGenreName = document.querySelector("input[type='text']");
let btnGenreOk = document.querySelector("input[type='submit']");


frmGenre.onsubmit = function () {
    if (txtGenreName.value.trim().length == 0) {
        // console.dir(this);

        txtGenreName .placeholder = '값을 입력하세요.';
        txtGenreName.focus();
        return false;
    }
    return false;
};