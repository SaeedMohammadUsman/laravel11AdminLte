import Swal from "sweetalert2";

/**
 * Show SweetAlert2 Flash Alerts
 */
export function showFlashMessages() {
    const success = document.querySelector('meta[name="swal-success"]')?.content;
    const error = document.querySelector('meta[name="swal-error"]')?.content;

    if (success) {
        Swal.fire({
            icon: "success",
            title: window.translations?.swalSuccessTitle || "Success",
            text: success,
        });
    }

    if (error) {
        Swal.fire({
            icon: "error",
            title: window.translations?.swalErrorTitle || "Error",
            text: error,
        });
    }
}

/**
 * Show Delete Confirmation Alert
 * @param {Function} onConfirm - Callback to execute when confirmed
 */
export function confirmDelete(onConfirm) {
    Swal.fire({
        title: window.translations?.swalDeleteTitle || "Are you sure?",
        text: window.translations?.swalDeleteText || "This action cannot be undone!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: window.translations?.swalDeleteConfirm || "Yes, delete it!",
        cancelButtonText: window.translations?.swalDeleteCancel || "Cancel",
    }).then((result) => {
        if (result.isConfirmed) {
            onConfirm();
        }
    });
}
