import { Modal } from "flowbite";

document.addEventListener("DOMContentLoaded", () => {
    const $modalElement = document.querySelector('#deputy-modal');

    const modalOptions = {
        closable: true,
    };

    const instanceOptions = {
        id: 'deputy-modal',
        override: true
    };    

    const modal = new Modal($modalElement, modalOptions, instanceOptions);

    window.deputyModal = modal
})