
import axios from 'axios';
import React, { useEffect, useState } from 'react'
import { SocialIcon } from 'react-social-icons'

export default function SocialMedia() {
  const [social, setSocail] = useState([]);
  useEffect(() => {
    axios.get('https://laravel-api.yaredayele.com/api/social_media')
      .then(response => setSocail(response.data))
      .catch(error => console.error('Error fetching user:', error));
  }, []); 
  
  return (
    <div>
        <h5 style={{alignItems:'center',textAlign:'center',color:'#C0C0C1',marginBottom:'6px'}}>Connect with me</h5>
        <div style={{ display: 'flex', gap: '10px',alignItems:'center',justifyContent:'center' }}>
          {social.map((item, index) => (
            <a href={item.link} target='_blank'><img src={`https://laravel-api.yaredayele.com/storage/icon/${item.icon}`} style={{ height: 30, width: 30 }} alt="" /></a>
          ))}
      </div>
    </div>
   
  )
}
