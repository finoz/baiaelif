import "../style/main.scss";

class Setup {
  constructor() {
    this.log = "Start altaformazione - strabof init";
  }

  init() {
    this.modalTriggerHandler();
  }

  modalTriggerHandler() {
    const infoModal = document.querySelector(".infomodal");
    const infoTrigger = document.querySelector(".infotrigger");
    const closeTrigger = document.querySelector(".infoclose");
    infoTrigger.addEventListener("click", () => {
      infoModal.showModal();
    });
    closeTrigger.addEventListener("click", () => {
      infoModal.close();
    });
  }
}

let setup = new Setup();
window.onload = () => {
  setup.init();
};
