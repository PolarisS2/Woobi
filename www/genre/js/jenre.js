let frmGemre = document.querySelector("form");
let txtGenreName = document.querySelector("input[type='text']");
let btnGenreOk = document.querySelector("input[type='submit']");


frmGenre.onsubmit = function () {
    if (txtGenreName.value.trim().length == 0) {
        // console.dir(this);

        txtGenreName .placeholder = '���� �Է��ϼ���.';
        txtGenreName.focus();
        return false;
    }
    return false;
};