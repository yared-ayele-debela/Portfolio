import axios from 'axios';
import React, { Component, useEffect, useState } from 'react'
import { useParams } from 'react-router-dom';
import './BlogDetail.css';

const BlogDetail = () => {
  const { id } = useParams();
  const [blog, setBlog] = useState(null);

  useEffect(() => {
    axios.get(`https://laravel-api.yaredayele.com/api/blog_detail/${id}`)
      .then(response => {
        setBlog(response.data);
      })
      .catch(error => {
        console.error('Error fetching blog details:', error);
      });
  }, [id]);

  if (!blog) {
    return <div>Loading blog details...</div>;
  }

  return (
    <section className='portfolio'>
      <section className='blogs'>
        <br />
        <h2>Blog Detail :</h2>
        <br />
        <div class="card">
          <img src={`https://laravel-api.yaredayele.com/storage/blogs/${blog.image}`} alt={blog.title} class="card-image" />
          <div class="card-content">
            <h2 class="card-title">{blog.title}</h2>
            <br />
            <div
              className="card-description"
              dangerouslySetInnerHTML={{ __html: blog.description }}
            />
            <br />
            <p>Date: {new Date(blog.created_at).toLocaleDateString()}</p>
          </div>
        </div>
      </section>
    </section>
  )
}

export default BlogDetail
