require("./bootstrap");

import Alpine from "alpinejs";
import Swal from "sweetalert2";

window.Alpine = Alpine;
Alpine.start();

window.Swal = Swal;

window.Toast = Swal.mixin({
    toast: true,
    position: "top-right",
    iconColor: "white",
    customClass: {
        popup: "colored-toast",
    },
    showConfirmButton: false,
    timer: 5000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener("mouseenter", Swal.stopTimer);
        toast.addEventListener("mouseleave", Swal.resumeTimer);
    },
});

/*-----------------------------------------------*\
| Personal collection of usefull regex functions  |
| Adaptable to work as fine with PHP preg_replace |
| by the regex master "CouteauSuisse"             |
\*-----------------------------------------------*/
window.titleCase = function(evt) {
    let input = evt;
    return input.replace(
        /(^[A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]{1})|([^A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ]+[A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœ]{1})/g,
        (letter) => letter.toLocaleUpperCase()
    );
};

window.upperCase = function(evt) {
    let input = evt;
    return input.toLocaleUpperCase();
};

window.lowerCase = function(evt) {
    let input = evt;
    return input.toLocaleLowerCase();
};

window.formatNames = function(evt) {
    let input = evt;
    return input
        .replace(
            /(^[^A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ]{1})|([^A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ \-']+)/,
            ""
        )
        .replace(
            /[ ]{1}[^A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ]/,
            " "
        )
        .replace(
            /[-]{1}[^A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ]/,
            "-"
        )
        .replace(
            /[']{1}[^A-Za-záàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ]/,
            "'"
        );
};

window.formatEmails = function(evt) {
    let input = evt;
    return input.replace(/[^\w\-@.]+/, "");
};

window.formatNumbers = function(evt) {
    let input = evt;
    return input.replace(/(^[^0-9]+$)/, "");
};

window.formatPhones = function(evt) {
    let input = evt;
    return (
        input[0].replace(/[^+\d]/, "") +
        input
        .substring(1)
        .replace(/([^\d .-]+)/, "")
        .replace(/[ ]{1}[\D]/, " ")
        .replace(/[-]{1}[\D]/, "-")
        .replace(/[.]{1}[\D]/, ".")
    );
};

window.formatStrings = function(evt) {
    let input = evt;
    return input
        .replace(
            /^[^A-Za-z0-9áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ"()*@$£]/,
            ""
        )
        .replace(
            /[^A-Za-z0-9áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ\s\-_'"°()#*@?,.:!%$£€{}[\]<>+/=&]+/,
            ""
        )
        .replace(/[ ]{2,}/, " ")
        .replace(/[\r]{3,}/, "\r\r")
        .replace(/[\n]{3,}/, "\n\n")
        .replace(/["]{2,}/, '"')
        .replace(/[']{2,}/, "'");
};

window.formatInput = function(e) {
    if (e.value === "") return;
    if (e.classList.contains("cap")) {
        e.value = titleCase(e.value);
    }
    if (e.classList.contains("up")) {
        e.value = upperCase(e.value);
    }
    if (e.classList.contains("low")) {
        e.value = lowerCase(e.value);
    }
    if (e.classList.contains("name")) {
        e.value = formatNames(e.value);
    }
    if (e.classList.contains("mail")) {
        e.value = formatEmails(e.value);
    }
    if (e.classList.contains("num")) {
        e.value = formatNumbers(e.value);
    }
    if (e.classList.contains("tel")) {
        e.value = formatPhones(e.value);
    }
    if (e.classList.contains("txt")) {
        e.value = formatStrings(e.value);
    }
};

function field() {
    return {
        format: function(e) {
            formatInput(e)
        },
    }
}

function selects() {
    return {
        inp: "",
        search: "",
        list: [],
        show: false,

        init: async function() {
            const that = this
            await axios.get('some.url.com')
                .then(function(data) {
                    // that.list = data
                    that.list = ['a', 'b', 'c', 'd', 'efd', 'hab', 'eez']
                })
                .catch(function(err) {
                    console.log(err)
                })
        },
        toggleList: function() {
            this.show = !this.show
        },
        deleteItem: function() {
            this.inp = ""
        },
        setItem: function(e) {
            this.inp = e
        },
        filterItems: function() {
            if (this.search === "") {
                return this.list
            } else {
                return this.list.filter((item) => {
                    return item.toLowerCase().includes(this.search.toLowerCase());
                })
            }
        }
    }
}