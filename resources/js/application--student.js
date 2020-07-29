window.addEventListener("load", () => {
    let rm_btns = document.querySelectorAll("button[data-role='remove']");
    rm_btns.addEventListener("click", function (e) {
        if (confirm("정말로 면접을 취소하시겠습니까?")) {
            let apply_id = this.dataset.id;
            fetch("/applications/" + apply_id, { method: "DELETE" })
                .then(res => res.json())
                .then(json => {
                    if (json.message == "") {
                        alert("면접이 취소되었습니다.");
                        location.reload();
                    } else {
                        alert(json.message);
                    }
                });
        }
    });
});