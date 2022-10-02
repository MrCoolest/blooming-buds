const login_form = document.getElementById('login_form');
const login_username = document.getElementById('username');
const login_password = document.getElementById('passwd');
const logout_user_key = document.getElementById('logout_user_key');
const error_show = document.getElementById('error')

main();


function logout_user(){
 
  sessionStorage.removeItem("blooming_user");
  logout_user_key.style.display = 'none';
    window.location.href = './index.php'
  
  // main();
}




// Replace ./data.json with your JSON feed

async function get_auth_data(){
  const url = './auth.json'
  const response = await fetch(url);
  const data = await response.json()
  const json_auth =  await data['auth'];

  return await json_auth
}


// const user = 'blooming'; 
// const pass = 'blooming1234'; 


// get_auth_data();



login_form.addEventListener('submit',(event) => {
  event.preventDefault()
  authenticate_user();

})

async function authenticate_user(){
  const username = login_username.value;
  const passwd = login_password.value;
 

  auth_data = await get_auth_data();

 

  if(auth_data[0].username === username && auth_data[0].password === passwd ){
    
    sessionStorage.setItem('blooming_user', username);
    main();
  }
  else{
    error_show.innerHTML="<h3> Invalid Username & Password</h3>";
  }

  return;
}


function main(){
  if(sessionStorage.getItem('blooming_user')){
    login_form.style.display = 'none';
    logout_user_key.style.display = 'block';
    window.location.href = './content_upload.php'
  }else{
    login_form.style.display = 'block';
    logout_user_key.style.display = 'none';

  }
}