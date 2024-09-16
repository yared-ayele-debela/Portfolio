import React, { useEffect, useState } from 'react';
import { useParams } from 'react-router-dom';
import axios from 'axios';
import './ProjectDetail.css';

const ProjectDetail = () => {

  const { id } = useParams();
  const [project, setProject] = useState(null);

  useEffect(() => {
    axios.get(`https://laravel-api.yaredayele.com/api/project/detail/${id}`)
      .then(response => {
        setProject(response.data);
      })
      .catch(error => {
        console.error('Error fetching project details:', error);
      });
  }, [id]);

  if (!project) {
    return <div>Loading project details...</div>;
  }

  return (
    <section className='portfolio'>
      <header>
        <h2>Project Detail : {project.title}</h2>
      </header>
      <section className='projects'>
        <div class="card">
          <img src={`https://laravel-api.yaredayele.com/storage/projects/${project.cover_image}`} alt={project.title} class="card-image" />
          <div class="card-content">
            <h2 class="card-title">{project.title}</h2>
            <br />
            <p><strong>Category:</strong> {project.category}</p>
            <div
              className="card-description"
              dangerouslySetInnerHTML={{ __html: project.description }}
            />
            <br />
            <p><strong>Start Date:</strong> {project.start_date}</p>
            <p><strong>End Date:</strong> {project.end_date}</p>
          </div>
        </div>
        <h3 className='card-title title'>Project Images </h3>
        <div class="image-gallery">
          {project.images.map((image, index) => (
            <img
              src={`https://laravel-api.yaredayele.com/storage/projects/${image.images}`}
              alt={project.title}
              className="card-image"
              key={index}
            />
          ))}
        </div>
      </section>
    </section>
  );
};

export default ProjectDetail;
