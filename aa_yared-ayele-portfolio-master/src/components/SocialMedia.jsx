import axios from 'axios';
import React, { useEffect, useState } from 'react';

export default function SocialMedia() {
  const [social, setSocial] = useState(() => {
    // Load initial state from localStorage
    const savedSocial = localStorage.getItem('socialMedia');
    return savedSocial ? JSON.parse(savedSocial) : [];
  });

  useEffect(() => {
    const fetchSocialMedia = async () => {
      try {
        const response = await axios.get('https://laravel-api.yaredayele.com/api/social_media');
        setSocial(response.data);
        // Save to localStorage
        localStorage.setItem('socialMedia', JSON.stringify(response.data));
      } catch (error) {
        console.error('Error fetching social media:', error);
      }
    };

    // Fetch data only if social media data is empty
    if (social.length === 0) {
      fetchSocialMedia();
    }
  }, [social]);

  return (
    <div>
      <h5 style={{ alignItems: 'center', textAlign: 'center', color: '#C0C0C1', marginBottom: '6px' }}>Connect with me</h5>
      <div style={{ display: 'flex', gap: '10px', alignItems: 'center', justifyContent: 'center' }}>
        {social.map((item, index) => (
          <a key={index} href={item.link} target='_blank' rel='noopener noreferrer'>
            <img src={`https://laravel-api.yaredayele.com/storage/icon/${item.icon}`} style={{ height: 30, width: 30 }} alt={item.platform} />
          </a>
        ))}
      </div>
    </div>
  );
}
