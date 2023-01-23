const Toast = Swal.mixin({
    toast: true
    , position: 'top-end'
    , showConfirmButton: false
    , timer: 1000
    , timerProgressBar: true
    , customClass: {
        popup: 'colored-toast'
    }
    , didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})
