const crossIcon = document.getElementById("crossIcon1");
const crossIcon2 = document.getElementById("crossIcon2");
const crossIcon3 = document.getElementById("crossIcon3");
const crossIcon4 = document.getElementById("crossIcon4");
const crossIcon5 = document.getElementById("crossIcon5");
const crossIcon6 = document.getElementById("crossIcon6");
const crossIcon7 = document.getElementById("crossIcon7");
//const crossIcon8 = document.getElementById("crossIcon8");
const contactDetailsScrollableBox = document.querySelector(
  ".contactDetailsScrollableBox"
);
const detailBoxScrollable = document.querySelector(".detailBoxScrollable");
const hidedleaddetailsBox = document.querySelector(".hidedleaddetailsBox");
const hidescriptBox = document.querySelector(".hidescriptBox");
const activityBox = document.querySelector(".activityBox");
const tasksScrollableBox = document.querySelector(".tasksScrollableBox");
const dealBoxScrollable = document.querySelector(".dealBoxScrollable");
const emptyBox = document.querySelector(".emptyBox");


crossIcon.addEventListener("click", () => {
  localStorage.setItem("id1", "1");

  contactDetailsScrollableBox.style.visibility = "hidden";
});
crossIcon2.addEventListener("click", () => {
  detailBoxScrollable.style.visibility = "hidden";
  localStorage.setItem("id2", "1");
});
crossIcon3.addEventListener("click", () => {
  hidedleaddetailsBox.style.visibility = "hidden";
  localStorage.setItem("id3", "1");
});

crossIcon4.addEventListener("click", () => {
  hidescriptBox.style.visibility = "hidden";
  localStorage.setItem("id4", "1");
});
crossIcon5.addEventListener("click", () => {
  localStorage.setItem("id5", "1");

  activityBox.style.visibility = "hidden";
});
crossIcon6.addEventListener("click", () => {
  tasksScrollableBox.style.visibility = "hidden";
  localStorage.setItem("id6", "1");
});
crossIcon7.addEventListener("click", () => {
  dealBoxScrollable.style.visibility = "hidden";
  localStorage.setItem("id7", "1");
});
// crossIcon8.addEventListener("click", () => {
//   emptyBox.style.visibility = "hidden";
//   localStorage.setItem("id8", "1");
// });

const dregaearea = document.querySelector(".mainContainer");
const firstDiv = document.querySelector(".firstDiv");
const middleBox = document.querySelector(".middleBox");
const seconddiv = document.querySelector(".seconddiv");



const showdiv = () => {
  const id1 = localStorage.getItem("id1");
  const id2 = localStorage.getItem("id2");
  const id3 = localStorage.getItem("id3");
  const id4 = localStorage.getItem("id4");
  const id5 = localStorage.getItem("id5");
  const id6 = localStorage.getItem("id6");
  const id7 = localStorage.getItem("id7");
  // const id8 = localStorage.getItem("id8");

  id1
    ? (contactDetailsScrollableBox.style.display = "none")
    : (contactDetailsScrollableBox.style.display = "block");
  id2
    ? (detailBoxScrollable.style.display = "none")
    : (detailBoxScrollable.style.display = "block");
  id3
    ? (hidedleaddetailsBox.style.display = "none")
    : (hidedleaddetailsBox.style.display = "block");
  id4
    ? (hidescriptBox.style.display = "none")
    : (hidescriptBox.style.display = "block");
  id5
    ? (activityBox.style.display = "none")
    : (activityBox.style.display = "block");


  id6
    ? (tasksScrollableBox.style.display = "none")
    : (tasksScrollableBox.style.display = "block");

  id7
    ? (dealBoxScrollable.style.display = "none")
    : (dealBoxScrollable.style.display = "block");
  // id8
  //   ? (emptyBox.style.display = "none")
  //   : (emptyBox.style.display = "block");



};

//
//     hidedleaddetailsBox.style.visibility = "visible";
//     hidescriptBox.style.visibility = "visible";
//     activityBox.style.visibility = "visible";
// //     dealBoxScrollable.style.visibility = "visible";
// detailBoxScrollable.style.visibility = "hidden";
// hidedleaddetailsBox.style.visibility = "hidden";
// hidescriptBox.style.visibility = "hidden";
// activityBox.style.visibility = "hidden";
// tasksScrollableBox.style.visibility = "hidden";



///deag and drop  

if (window.innerWidth > 700) {
  new Sortable(firstDiv, {
    animation: 350,
  });

  new Sortable(middleBox, {
    animation: 350,
  });
  new Sortable(seconddiv, {
    animation: 350,
  });
}