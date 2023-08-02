function gantistatus(x) {
    inp = document.getElementById("gstatus");
    if (x == 1) {
        inp.value = 1;
    } else {
        inp.value = 0;
    }
    document.getElementById('statusbtn').click();
}

function edit(x) {
    document.getElementById("editid").value = x;
    document.getElementById("editbtn").click();
}