// console.log('Request data');

// const p = new Promise(function (resolve, reject) {
//     setTimeout(() => {
//         console.log('Preparing data');
//         const backendData = {
//             server: 'aws',
//             port: 2000,
//             status: 'working'
//         }
//         resolve(backendData);
//     }, 4000);
// })

// p.then(data => {
//     return new Promise((resolve, reject) => {
//      setTimeout(() => {
//          data.modified = true
//          resolve(data);
//      }, 2000)
//     })
// }).then(clientData => {
//     console.log('Data received', clientData);
// });

// const p2 = new Promise((resolve, reject) =>{
//     setTimeout(() => {
//             console.log('1')
//             const d = {
//                 a: 1,
//                 b: 2,
//             }
//         resolve(d)
//     }, 2000)

//     setTimeout(() => {
//         console.log('2')
//     }, 3000)

    
// })
// p2.then((data)=> {
//     return new Promise((resolve, reject) => {
//         setTimeout(() => {
//             console.log('4',data)
//         },4000)
//         resolve()
//     }).then(()=> {
//         setTimeout(() => {
//             console.log('3')
//         },3000)
//     }).catch(err => console.error('Error', err))
// })

// console.log('5')

// async function f() {
//     return 1;
// }

// f().then(alert);



// const d = new Promise((resolve, reject) => {
//         setTimeout(() => {
//             alert('выполнилось через 3 секунды');
//         }, 3000)
//         resolve();
// }).then();
// function delay(ms) {
    
//   }
  
//   delay(3000).then(() => alert('выполнилось через 3 секунды'));
