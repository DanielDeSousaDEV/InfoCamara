import { Modal } from "flowbite";

const $modalElement = document.querySelector('#deputy-modal');

const modalOptions = {
    closable: true,
    onShow: () => {
        console.log('modal is shown');
    },
};

// instance options object
const instanceOptions = {
  id: 'deputy-modal',
  override: true
};

const modal = new Modal($modalElement, modalOptions, instanceOptions);


const buttons = document.querySelectorAll('button.btn-show-deputy-data')

buttons.forEach(btn => btn.addEventListener('click', async () => {
    const deputyId = btn.dataset.deputyId

    //requisição

    $modalElement.querySelector('p#name').innerHTML = ('de sousa')
    $modalElement.querySelector('p#dayOfBirth').innerHTML = ('de sousa')
}))