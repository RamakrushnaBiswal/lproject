const product=[
    {
        id:0,
        image:'POSTER2.jpg',
        title:'z flip foldable mobile',
        price:120,
    },
    {
        id:1,
        image:'POSTER1.jpg',
        title:'z flip foldable mobile',
        price:120,
    },
    
        {
            id:2,
            image:'POSTER3.jpg',
            title:'z flip foldable mobile',
            price:120,
        },
        {
            id:3,
            image:'image/gg-1.jpg',
            title:'z flip foldable mobile',
            price:120,
        }
    ];
const categories=[...new set(product.map((item)=>
{return item}))]
let i=0;
document.getElementById('root').innerHTML=categories.map((item)=>
{
    var{image,title,price}=item;
    return(
        `<div class='box'>
            <div class="img-box">
                <img class='images' src ${image}> </img>
            </div>
               <div class='bottom'>
                <p>${title}</p>
                 <h2>$ ₹{price}.00</h2>`+
                "<button onclick='addtocart("+(i++)+")'>Add to cart </button>"
    )
                 ` </div>
                  </div>`
}).join('')



   
