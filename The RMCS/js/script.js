let cj = document.querySelector('.header .flex .navbar');

document.querySelector('#menu-btn').onclick = () =>{
     cj.classList.toggle('active');
}

window.onscroll = () => {
    cj.classList.remove('active');
}

document.querySelectorAll('input[type="number"]').forEach(inputNumber => {
    inputNumber.oninput = () => {
        if(inputNumber.ariaValueMax.length > inputNumber.maxLength) inputNumber.value = inputNumber.value.slice(0,inputNumber.maxLength);
    };
});



// text 

function color_change(count){
    let icon = document.getElementById("icon").src;
    document.body.classList.toggle("dark-theme");
   
    if(icon.indexOf("images/moon.png")!= -1)
    {
        document.getElementById("icon").src = "images/sun.png";
    }
    else{
        document.getElementById("icon").src = "images/moon.png";
    }
}

// text 

// Search Module


// function search_here()
// {
//     var post_in =  document.querySelector('#title1')
//     var loc_in =  document.querySelector('#location1')
//     var post = post_in.value;
//     var loc = loc_in.value;
//     var pop_alrt = document.querySelector('#pop_alert');
//     var pop_img = document.querySelector('#pop_img');

//     if(loc == 1) // mumbai
//     {
//         if(post == 1) //jr.dev
//         {
//             pop_alrt.innerHTML="*Job not availabe at this location";
//             pop_img.src="images/warning.png";
//         }

//         else if(post == 2) //sr.dev
//         {
//             pop_alrt.innerHTML="";
//             pop_img.src="";
//             location = "All_jobs/sr_webdev_mumbai.php";
//         }

//         else if(post == 3) //designer
//         {
//             pop_alrt.innerHTML="*Job not availabe at this location";
//             pop_img.src="images/warning.png";
//         }

//         else if(post == 4) //db
//         {
//             pop_alrt.innerHTML="";
//             pop_img.src="";
//             location = "All_jobs/db_mumbai.php";
//         }

//         else if(post == 5) //hr
//         {
//             pop_alrt.innerHTML="*Job not availabe at this location";
//             pop_img.src="images/warning.png";        }

//         else if(post == 6) //cy_sec
//         {
//             pop_alrt.innerHTML="*Job not availabe at this location";
//             pop_img.src="images/warning.png";        }

//         else if(post == 7) //fs_dev
//         {
//             pop_alrt.innerHTML="*Job not availabe at this location";
//             pop_img.src="images/warning.png";        }

//         else if(post == 8) //dsci
//         {
//             pop_alrt.innerHTML="";
//             pop_img.src="";
//             location = "All_jobs/data_sci_mumbai.php";
//         }
//         else{
//             pop_alrt.innerHTML="*Choose a Job";
//             pop_img.src="images/warning.png";
//         }

//     }
//     else if(loc == 2)
//     {
//         if(post == 1) //jr.dev
//         {
//             pop_alrt.innerHTML="";
//             pop_img.src="";
//             location = "All_jobs/jr_dev__pune.php";
//         }

//         else if(post == 2) //sr.dev
//         {
//             pop_alrt.innerHTML="*Job not availabe at this location";
//             pop_img.src="images/warning.png";        }

//         else if(post == 3) //designer
//         {
//             pop_alrt.innerHTML="*Job not availabe at this location";
//             pop_img.src="images/warning.png";        }

//         else if(post == 4) //db
//         {
//             pop_alrt.innerHTML="*Job not availabe at this location";
//             pop_img.src="images/warning.png";        }

//         else if(post == 5) //hr
//         {
//             pop_alrt.innerHTML="";
//             pop_img.src="";
//             location = "All_jobs/hr_pune.php";
//         }

//         else if(post == 6) //cy_sec
//         {
//             pop_alrt.innerHTML="*Job not availabe at this location";
//             pop_img.src="images/warning.png";        }

//         else if(post == 7) //fs_dev
//         {
//             pop_alrt.innerHTML="*Job not availabe at this location";
//             pop_img.src="images/warning.png";        }

//         else if(post == 8) //dsci
//         {
//             pop_alrt.innerHTML="";
//             pop_img.src="";
//             location = "All_jobs/data_sci_pune.php";
//         }
//         else{
//             pop_alrt.innerHTML="*Choose a Job";
//             pop_img.src="images/warning.png";
//         }
//     }
//     else if(loc == 3)
//     {
//         if(post == 1) //jr.dev
//         {
//             pop_alrt.innerHTML="*Job not availabe at this location";
//             pop_img.src="images/warning.png";        }

//         else if(post == 2) //sr.dev
//         {
//             pop_alrt.innerHTML="";
//             pop_img.src="";
//             location = "All_jobs/sr_webdev_beng.php";
//         }

//         else if(post == 3) //designer
//         {
//             pop_alrt.innerHTML="";
//             pop_img.src="";
//             location = "All_jobs/design_beng.php";
//         }

//         else if(post == 4) //db
//         {
//             pop_alrt.innerHTML="*Job not availabe at this location";
//             pop_img.src="images/warning.png";         
// 	    }

//         else if(post == 5) //hr
//         {
//             pop_alrt.innerHTML="";
//             pop_img.src="";
//             location = "All_jobs/hr_beng.php";
//         }

//         else if(post == 6) //cy_sec
//         {
//             pop_alrt.innerHTML="*Job not availabe at this location";
//             pop_img.src="images/warning.png";        }

//         else if(post == 7) //fs_dev
//         {
//             pop_alrt.innerHTML="*Job not availabe at this location";
//             pop_img.src="images/warning.png";        }

//         else if(post == 8) //dsci
//         {
//             pop_alrt.innerHTML="*Job not availabe at this location";
//             pop_img.src="images/warning.png";        }
//         else{
//             pop_alrt.innerHTML="*Choose a Job";
//             pop_img.src="images/warning.png";
//         }
//     }
//     else if(loc == 4)
//     {
//         if(post == 1) //jr.dev
//         {
//             pop_alrt.innerHTML="*Job not availabe at this location";
//             pop_img.src="images/warning.png";        }

//         else if(post == 2) //sr.dev
//         {
//             pop_alrt.innerHTML="*Job not availabe at this location";
//             pop_img.src="images/warning.png";        }

//         else if(post == 3) //designer
//         {
//             pop_alrt.innerHTML="";
//             pop_img.src="";
//             location = "All_jobs/design_chenn.php";
//         }

//         else if(post == 4) //db
//         {
//             pop_alrt.innerHTML="";
//             pop_img.src="";
//             location = "All_jobs/db_chen.php";
//         }

//         else if(post == 5) //hr
//         {
//             pop_alrt.innerHTML="*Job not availabe at this location";
//             pop_img.src="images/warning.png";        }

//         else if(post == 6) //cy_sec
//         {
//             pop_alrt.innerHTML="*Job not availabe at this location";
//             pop_img.src="images/warning.png";        }

//         else if(post == 7) //fs_dev
//         {
//             pop_alrt.innerHTML="";
//             pop_img.src="";
//             location = "All_jobs/fs_dev_chen.php";
//         }

//         else if(post == 8) //dsci
//         {
//             pop_alrt.innerHTML="*Job not availabe at this location";
//             pop_img.src="images/warning.png";        }
//         else{
//             pop_alrt.innerHTML="*Choose a Job";
//             pop_img.src="images/warning.png";
//         }
//     }
//     else if(loc == 5)
//     {
//         if(post == 1) //jr.dev
//         {
//             pop_alrt.innerHTML="";
//             pop_img.src="";
//             location = "All_jobs/jr_dev_hyder.php";
//         }

//         else if(post == 2) //sr.dev
//         {
//             pop_alrt.innerHTML="*Job not availabe at this location";
//             pop_img.src="images/warning.png";        }

//         else if(post == 3) //designer
//         {
//             pop_alrt.innerHTML="*Job not availabe at this location";
//             pop_img.src="images/warning.png";        }

//         else if(post == 4) //db
//         {
//             pop_alrt.innerHTML="*Job not availabe at this location";
//             pop_img.src="images/warning.png";        }

//         else if(post == 5) //hr
//         {
//             pop_alrt.innerHTML="*Job not availabe at this location";
//             pop_img.src="images/warning.png";        }

//         else if(post == 6) //cy_sec
//         {
//             pop_alrt.innerHTML="";
//             pop_img.src="";
//             location = "All_jobs/cyber_hyder.php";
//         }

//         else if(post == 7) //fs_dev
//         {
//             pop_alrt.innerHTML="";
//             pop_img.src="";
//             location = "All_jobs/fs_dev_hyder.php";
//         }

//         else if(post == 8) //dsci
//         {
//             pop_alrt.innerHTML="*Job not availabe at this location";
//             pop_img.src="images/warning.png";        }
//         else{
//             pop_alrt.innerHTML="*Choose a Job";
//             pop_img.src="images/warning.png";
//         }
//     }
//     else{
//         pop_alrt.innerHTML="*Make sure you selected a Location or Job !!";
//             pop_img.src="images/warning.png";
//     }
    
// }


// Clear warning

function clear_txt()
{
    var pop_alrt = document.querySelector('#pop_alert');
    var pop_img = document.querySelector('#pop_img');
    pop_alrt.innerHTML="";
    pop_img.src=""; 
}

// Clear warning

// Search Module
