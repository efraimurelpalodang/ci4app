function previewImg() {
  const sampul = document.querySelector("#sampul");
  const imgPreview = document.querySelector(".input-group .img-preview");

  const fileSampul = new FileReader();
  fileSampul.readAsDataURL(sampul.files[0]);

  fileSampul.onload = function (e) {
    imgPreview.src = e.target.result;
  };
}
