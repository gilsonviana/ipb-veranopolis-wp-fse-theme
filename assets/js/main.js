"use strict"

const main = () => {
  let blurState = 1

  const navigationHeader = () => {

    const headerTarget = document.querySelector('.ipb-absolute-top.wp-block-template-part')

    if (!headerTarget) return;

    const toggleBackdropFilter = () => {
      headerTarget.classList.toggle('backdrop-filter-blur')
    }

    headerTarget.querySelector('nav .wp-block-navigation__responsive-container-open').addEventListener('pointerdown', toggleBackdropFilter)
    headerTarget.querySelector('nav .wp-block-navigation__responsive-container-close').addEventListener('pointerdown', toggleBackdropFilter)

  }

  const init = () => {
    navigationHeader()
  }

  init()

}

document.addEventListener("DOMContentLoaded", main, false)
