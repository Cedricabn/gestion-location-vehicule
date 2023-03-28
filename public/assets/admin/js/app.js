let deleteConfirmation = function (e) {
    if (typeof (swal) !== 'undefined') {
        Swal.fire({
            title: "Suppression",
            text: "Cet element sera supprimé",
            dangerMode: true,
            icon: "warning",
            buttons: {
                cancel: true,
                confirm: "Oui, Supprimer",
            },
            cancel: true,
        }).then((value) => {
            if (value) {
                e.submit();
            }
            else {
                swal("Suppression annulée", '', {
                    timer: 2000,
                    icon: 'info'
                });
            }
        });
    }
    else {
        value = confirm('Voulez vous supprimer cet element ?')
        if (value) {
            e.submit();
        }
    }
    // e.submit();
}