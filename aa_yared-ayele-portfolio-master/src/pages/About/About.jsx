/* eslint-disable react/no-unescaped-entities */

import { useEffect, useState } from "react";
import Testimonial from "./Testimonial";
import Service from "./Service";
import axios from "axios";

const About = () => {
  const [user, setUser] = useState(() => {
    const savedUser = localStorage.getItem('user');
    return savedUser ? JSON.parse(savedUser) : {};
  });

  const [services, setService] = useState(() => {
    const savedServices = localStorage.getItem('services');
    return savedServices ? JSON.parse(savedServices) : [];
  });

  useEffect(() => {
    const fetchData = async () => {
      try {
        const [userResponse, servicesResponse] = await Promise.all([
          axios.get('https://laravel-api.yaredayele.com/api/resume'),
          axios.get('https://laravel-api.yaredayele.com/api/service'),
        ]);

        setUser(userResponse.data);
        setService(servicesResponse.data);

        // Save to localStorage
        localStorage.setItem('user', JSON.stringify(userResponse.data));
        localStorage.setItem('services', JSON.stringify(servicesResponse.data));
      } catch (error) {
        console.error('Error fetching data:', error);
      }
    };

    // Fetch data only if user or services data is empty
    if (!user.about_me || services.length === 0) {
      fetchData();
    }
  }, [user, services]);

  return (
    <article className="about active" data-page="about">
      <header>
        <h2 className="h2 article-title">About me</h2>
      </header>

      <section className="about-text">
        <p>
          {user.about_me}
        </p>
      </section>

      <section className="service">
        <h3 className="h3 service-title">What I'm doing</h3>
        <ul className="service-list">
          {services.map((service) => (
            <Service
              key={service.id}
              icon={`https://laravel-api.yaredayele.com/storage/category/${service.cover_image}`}
              title={service.name}
              description={service.description}
            />
          ))}
        </ul>
      </section>
    </article>
  );
};

export default About;
