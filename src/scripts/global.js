(function() {
    var header = new Headroom(document.querySelector(".header"), {
        tolerance: 5,
        offset : 10,
        classes: {
          initial: "headroom",
          pinned: "header--pined",
          unpinned: "header--unpinned",
          top: 'header--top',
          notTop: 'header--float',
          bottom: 'header--bottom',
          notBottom: 'header--not-bottom',
        }
    });
    header.init();
}());
