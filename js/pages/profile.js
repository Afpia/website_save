export function profileJS() {
  const change = document.querySelector('.profile__change');
  const inputAll = document.querySelectorAll('.profile__input');
  const button = document.querySelector('.profile__submit');

  change.addEventListener('click', () => {
    for (const item of inputAll) {
      if (item.hasAttribute('disabled')) {
        item.removeAttribute('disabled');
        item.classList.add('inputs-active');
        button.classList.remove('button-close');
        change.textContent = 'Отмена';
      } else {
        item.setAttribute('disabled', '');
        item.classList.remove('inputs-active');
        button.classList.add('button-close');
        change.textContent = 'Изменить';
      }
    }
  });

  // async function formSend() {
  //   let response = await fetch('../php/profile.php', {
  //     method: 'POST',
  //     headers: {
  //       'Content-Type': 'application/json;charset=utf-8',
  //     },
  //   });
  //   if (response.ok) {
  //     let done = await response.json();
  //   } else {
  //     alert('Ошибка');
  //   }
  // }
  // formSend();
}
