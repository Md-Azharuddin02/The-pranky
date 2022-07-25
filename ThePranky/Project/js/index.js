
// Post Joke Saving Page Start 
let submitPost = document.getElementById('postsub-btn');
// let submitPost = document.getElementById('submit-form');

submitPost.addEventListener("submit",(e)=>{
  e.preventDefault();
  alert('YOur form was submit');
  let postName = document.getElementById('post-name').value;

  console.log(postName);
});

// submitPost.addEventListener('click',(e) =>{
//   e.preventDefault();
//   console.log("welcome to post");
// });


// Post Joke Saving Page End


// Post Joke validation Start
let postButton = document.getElementById('postsub-btn');

let validUserName = false;
let validContent = false;
let validCategory = false;

postButton.addEventListener('click',(e)=>{
    e.preventDefault();
    // console.log("button is worked");

    // Joke Post Name validation 
    let postUser = document.getElementById('post-name').value;
    let postUser2 = document.getElementById('post-name');
    let userNameMsg = document.getElementById('user-name-msg');

    let postUserRegex =  /^[a-zA-Z]([0-9a-zA-Z]){5,30}$/;
    if(postUserRegex.test(postUser)){
        postUser2.style.border = '3px solid green';
        userNameMsg.innerText = '';
        validUserName = true;
      }else{
        userNameMsg.innerText = 'Name Minimum 5 Letters and Without Space';
        postUser2.style.border = 'red solid 3px';
        validUserName = false;
      }

      // Joke Category Validation
      let postCategory = document.getElementById('post-category');
      let postCategory2 = document.getElementById('post-category');
      let categoryMsg = document.getElementById('category-msg');

      if(postCategory.value){
        postCategory2.style.border = '3px solid green';
        categoryMsg.innerText = '';
        validCategory = true;
      }else{
        postCategory2.style.border = '3px solid red';
        categoryMsg.innerText = 'Select Related Category';
        validCategory = false;
      }

      
    // Joke Content Validation
    let postContent = document.getElementById('post-content').value;
    let postContent2 = document.getElementById('post-content');
    let postContentMsg = document.getElementById('post-content-msg');

    if(postContent.length < 15){
        postContent2.style.border = '3px solid red';
        postContentMsg.innerText = 'Joke Minimum 15 Letters';
        validContent = false;
    }else{
        postContent2.style.border = '3px solid green';
        postContentMsg.innerText = '';
        validContent = true;
    }

});

// Post joke validation End