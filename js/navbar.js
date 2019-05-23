window.onscroll = () => {
  const nav = document.querySelector('#navbar');
  if(this.scrollY <= 100) nav.className = ''; else nav.className = 'scroll';
};
