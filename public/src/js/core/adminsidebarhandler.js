
let toggle2 = true;

const sideBarHandler = () => {
  if (toggle2) {
    
    sideBar.style.left = "-100%";
    
    toggle2 = !toggle2;
  } else {
    toggle2 = !toggle2;
    
    
    sideBar.style.left = "0%";
    
  }
};
