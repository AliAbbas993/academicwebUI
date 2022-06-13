<section id="testo-sec">
        <Row className="m-0">
          <Col md={9} sm={12}>
            {
              !activeTesto ?
                <>
                <h4 className="title-blue-bar mx-5 mb-3">Client's Testimonial</h4>
                {/* <p className="overview-black mx-5">Our Customer's Positive Feedback</p> */}
                </>
              :
              <h4 className="title-blue-bar mx-5 mb-3">Other Client's Testimonials</h4>
            }
          </Col>
          <Col md={12} sm={12}>
            <div className="slick-buttons">
                <button onClick={this.previous}>
                    <svg width="40px" height="50px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" className="svg-inline--fa fa-angle-left fa-w-8 fa-2x"><path fill="#ffffff" d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z" className=""></path></svg>
                </button>
                <button onClick={this.next}>
                    <svg width="40px" height="50px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" className="svg-inline--fa fa-angle-right fa-w-8 fa-2x"><path fill="#ffffff" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" className=""></path></svg>
                </button>
            </div>
          </Col>
        </Row>
        <Slider ref={c => (this.slider = c)} {...settings}>
          {
            clientTestoList.filter(clientTesto => clientTesto.id.slice(-1) !== activeTesto).map((filteredTesto, index) => (
              <div key={index}>
                <div className="testo-content text-center" >
                  <p className="testo-img-p my-3"><img src={filteredTesto.clientImg} alt="" className="testo-img"/></p>
                  <p className="testo-name">{filteredTesto.clientName}</p>
                  <p className="testo-designation">{filteredTesto.clientDesignation}</p>
                  <p className="testo-desc my-3">
                    <svg width="10px" className="svg-inline--fa fa-quote-left fa-w-16 fa-2x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="quote-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z" className=""></path></svg>
                    {filteredTesto.clientTestimonial}
                    <svg width="10px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="quote-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" className="svg-inline--fa fa-quote-right fa-w-16 fa-2x"><path fill="currentColor" d="M464 32H336c-26.5 0-48 21.5-48 48v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48zm-288 0H48C21.5 32 0 53.5 0 80v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48z" className=""></path></svg>
                  </p>
                  <Link to={{
                    pathname: "./client-testimonials",
                    hash: `${filteredTesto.id}`
                  }} className="btn more-btn">Read more</Link>
                </div>
              </div>
            ))
          }
        </Slider>
      </section>