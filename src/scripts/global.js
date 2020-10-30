window.onload = function () {
  console.log('opaaaa');
}

(function() {
    var header = new Headroom(document.querySelector(".header-container"), {
        tolerance: 5,
        offset : 100,
        classes: {
          initial: "headroom",
          pinned: "header--fixed",
          unpinned: "header--unpinned",
          top: 'header--top',
          notTop: 'header--float',
          bottom: 'header--bottom',
          notBottom: 'header--not-bottom',
        }
    });
    header.init();
}());
