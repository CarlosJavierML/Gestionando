"use strict";

$("#toastr-1").click(function () {
  iziToast.info({
    title: 'Correo enviado!',
    message: 'Se ha enviado el correo a los cotizantes que no ha cumplido.',
    position: 'topRight'
  });
});

$("#toastr-2").click(function () {
  iziToast.success({
    title: 'Correo enviado!',
    message: 'Se ha enviado el correo a los cotizantes que no ha cumplido.',
    position: 'topRight'
  });
});

$("#toastr-3").click(function () {
  iziToast.warning({
    title: 'Correo enviado!',
    message: 'Se ha enviado el correo a los cotizantes que no ha cumplido.',
    position: 'topRight'
  });
});

$("#toastr-4").click(function () {
  iziToast.error({
    title: 'Correo enviado!',
    message: 'Se ha enviado el correo a los cotizantes que no ha cumplido.',
    position: 'topRight'
  });
});

$("#toastr-5").click(function () {
  iziToast.show({
    title: 'Correo enviado!',
    message: 'Se ha enviado el correo a los cotizantes que no ha cumplido.',
    position: 'bottomRight'
  });
});

$("#toastr-6").click(function () {
  iziToast.show({
    title: 'Correo enviado!',
    message: 'Se ha enviado el correo a los cotizantes que no ha cumplido.',
    position: 'bottomCenter'
  });
});

$("#toastr-7").click(function () {
  iziToast.show({
    title: 'Correo enviado!',
    message: 'Se ha enviado el correo a los cotizantes que no ha cumplido.',
    position: 'bottomLeft'
  });
});

$("#toastr-8").click(function () {
  iziToast.show({
    title: 'Correo enviado!',
    message: 'Se ha enviado el correo a los cotizantes que no ha cumplido.',
    position: 'topCenter'
  });
});
