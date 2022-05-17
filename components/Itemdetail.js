import React,{useEffect} from 'react'
// import cartsvg from '../images/icon-cart.svg'
const Itemdetail = () => {
 const slider = ()=>{
   let thumbnail = document.getElementsByClassName('thumbnail');
   let activeitem = document.getElementsByClassName('active');
   for (let i = 0; i < thumbnail.length; i++) {
  thumbnail[i].addEventListener('mouseover',function(){
    console.log(activeitem)
    if (activeitem.length > 0) {
      activeitem[0].classList.remove('active')
    }
    this.classList.add('active')
    document.getElementById('featured').src = this.src
  })
   }
 }
  
useEffect(() => {
  slider()
}, [])

  
  
  return (
    <><div className="container itemdetail">
      <div className="row">
        <div className="col-lg-6">
<div className="slider">
  <div className="mainimg">
<img id='featured' src="https://www.skechers.co.uk/dw/image/v2/BDCN_PRD/on/demandware.static/-/Library-Sites-SkechersSharedLibrary/default/dwb574d0cc/images/Landing/men/SKX44314-2020-New-Site-Q2-Content-Grid_M_Boat-Shoes_65981-TPE.jpg" alt="shoes" /> </div>
<ul>
  <li>
    <img src="https://www.skechers.co.uk/dw/image/v2/BDCN_PRD/on/demandware.static/-/Library-Sites-SkechersSharedLibrary/default/dwb574d0cc/images/Landing/men/SKX44314-2020-New-Site-Q2-Content-Grid_M_Boat-Shoes_65981-TPE.jpg" className='thumbnail active' alt="shoes" />
  </li>
  <li>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTw96eTNmCL_lP5kR_pH13VRnCFlOfLolirAQ&usqp=CAU" className='thumbnail' alt="shoes" />
  </li>
  <li>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_ReFejJF2zkvcU41DmoMTfcb-gYGxhjJN_Q&usqp=CAU" className='thumbnail' alt="shoes" />
  </li>
  <li>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAtvum5kS70lbi-QtIPRVRxSRduFVaXpNWLA&usqp=CAU" className='thumbnail' alt="shoes" />
  </li>
</ul>
</div>
        </div>
        <div className="col-lg-6">
          <div className='details'><h6>company name</h6>
          <h1>product name</h1>
          <p>product description Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, totam? Atque, quaerat magnam consequuntur adipisci laborum est, dolorem tenetur iste debitis nemo eius expedita, perspiciatis nostrum placeat itaque accusantium sunt!</p>
          <h3>$123.00 <span>50%</span></h3>
          <p className='maxprice'>$234.00</p>
          <table><tr><td style={{width:'30%'}}><ul>
          <li>--</li>
          <li>1</li>
          <li>+</li></ul></td>
          <td><button><svg width="22" height="20" xmlns="http://www.w3.org/2000/svg"><path d="M20.925 3.641H3.863L3.61.816A.896.896 0 0 0 2.717 0H.897a.896.896 0 1 0 0 1.792h1l1.031 11.483c.073.828.52 1.726 1.291 2.336C2.83 17.385 4.099 20 6.359 20c1.875 0 3.197-1.87 2.554-3.642h4.905c-.642 1.77.677 3.642 2.555 3.642a2.72 2.72 0 0 0 2.717-2.717 2.72 2.72 0 0 0-2.717-2.717H6.365c-.681 0-1.274-.41-1.53-1.009l14.321-.842a.896.896 0 0 0 .817-.677l1.821-7.283a.897.897 0 0 0-.87-1.114ZM6.358 18.208a.926.926 0 0 1 0-1.85.926.926 0 0 1 0 1.85Zm10.015 0a.926.926 0 0 1 0-1.85.926.926 0 0 1 0 1.85Zm2.021-7.243-13.8.81-.57-6.341h15.753l-1.383 5.53Z" fill="white" fill-rule="nonzero"/></svg> add to cart </button></td></tr></table>
          </div>
        </div>
      </div>
      </div></>
  )
}

export default Itemdetail